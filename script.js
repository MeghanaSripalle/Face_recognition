 const image_given = document.getElementById('image')

 //console.log('error')

Promise.all([
  faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('./models')
]).then(startrecognition)

async function startrecognition() {

  // creating a div element and appending to the body
  const container = document.createElement('div') 
  container.style.position = 'relative'
  const area = document.getElementById('image-area')
  area.append(container)
  const Descriptors = await loadLabeledImages()
  const faceMatcher = new faceapi.FaceMatcher(Descriptors, 0.6)
  let image
  let canvas
  
  image_given.addEventListener('change', async () => { //async function  when image is uploaded
    
    //removing previous image if image exists
    if (image) image.remove() 
    //removing previous canvas if canvas exists
    if (canvas) canvas.remove()
    image = await faceapi.bufferToImage(image_given.files[0]) //choosing the first file that is uploaded to make it an image that can be used by the face api 
    container.append(image)
    canvas = faceapi.createCanvasFromMedia(image) //creates a canvas from the image to be used
    container.append(canvas)
    const displaySize = { width: image.width, height: image.height }
    faceapi.matchDimensions(canvas, displaySize) //resizing the canvas  
    const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors() //detecting the face with the face landmarks and descriptors
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor)) //finding best match(image over 60 percent accuracy) for each detection
    const names = results.map(result => result.toString().split(" (")[0] )
    console.log(names)
    //drawing the detection box for each detection with the label
    results.forEach((result, i) => {
      const box = resizedDetections[i].detection.box
      const name = result.toString().split(" (")[0] 
      const drawBox = new faceapi.draw.DrawBox(box, { label: name })
      drawBox.draw(canvas)
      
    })

    $.ajax({
      type: "POST",
      url: "trackattendance.php",
      data: {"ndata": names},
      contentType: 'application/x-www-form-urlencoded',
      success: function(data){
          alert(data);
          alert( "Updated Successfully!")
      }
    });

  })

}

function loadLabeledImages() {
  const labels = ['Phoebe Buffay','Rachel Green','Monica Geller','Chandler Bing','Joey Tribbiani','Meghana Sripalle','Ted Mosby','Lily Aldrin','Marshall Eriksen','Robin Scherbatsky','Barney Stinson','Sadie Prince','Noah Hills','Finn Wolfhard','Caleb Marsh','Millie Brown','Dustin March']

  return Promise.all(
    labels.map(async label => {
      const descriptions = []
      for (let i = 1; i <= 2; i++) {
        const img = await faceapi.fetchImage(`https://raw.githubusercontent.com/MeghanaSripalle/Face_Recognition/master/labeled_images/${label}/${i}.jpg`) //upload photos on a github account
        console.log('Working')

        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      }

      return new faceapi.LabeledFaceDescriptors(label, descriptions)
    })
  )
}
   