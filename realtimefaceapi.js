
// get the webcam video
const webcam = document.getElementById("webcam")
const button = document.querySelector("#btn_stop")

//Promise to load all the models 
Promise.all([
    faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
    faceapi.loadFaceRecognitionModel('./models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
    faceapi.nets.tinyFaceDetector.loadFromUri('./models'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('./models'),
    faceapi.loadMtcnnModel('./models')
  ]).then(startCapture)

async function startCapture() {
    let stream = null;

    try {
      stream = await navigator.mediaDevices.getUserMedia({video:true});
      webcam.srcObject = stream;
    } catch(err) {
      console.error(err);
    }
  }
let labeledfacedescriptors = []

webcam.addEventListener('play',async function (){
    const canvas = faceapi.createCanvasFromMedia(webcam)
    const divelement = document.getElementById("divforvideo")
    //divelement.style.position = "relative"
    const webcamdata = webcam.getBoundingClientRect();
    //canvas.style.left = webcamdata.left + "px";
    //canvas.style.top = webcamdata.top + "px";
    const canvasize = {width:webcamdata.width,height:webcamdata.height}
    faceapi.matchDimensions(canvas,canvasize) //resizing the canvas to match the video size
    divelement.prepend(canvas)
    labeledfacedescriptors = await loadimages()
    setInterval(async () => {
      const mtcnnParams = {
        maxNumScales: 10,
        scaleFactor: 0.709,
        scoreThresholds: [0.6, 0.7, 0.7],
        minFaceSize: 150
        }
      const params = new faceapi.MtcnnOptions(mtcnnParams)
      const detections = await faceapi.detectAllFaces(webcam,params).withFaceLandmarks().withFaceDescriptors()
      // resized detetections to match the displayed webcam 
      const newdetections = faceapi.resizeResults(detections,canvasize)
      //const faceMatcher = new faceapi.FaceMatcher(newdetections)
      canvas.getContext('2d').clearRect(0,0,canvas.width,canvas.height)
      //faceapi.draw.drawDetections(canvas, newdetections)  
      //const labeledfacedescriptors = await loadimages()
      const faceMatcher = new faceapi.FaceMatcher(labeledfacedescriptors, 0.6)
      const results = newdetections.map(d => faceMatcher.findBestMatch(d.descriptor)) 
      const names = results.map(result => result.toString().split(" (")[0] )
      results.forEach((bestmatch, j) => {
          const box = newdetections[j].detection.box
          const person = bestmatch.toString().split(" (")[0] 
          const customtext = person + " : " + "Admitted"
          const drawBox = new faceapi.draw.DrawBox(box,{ label: customtext })
          drawBox.draw(canvas)
          console.log("yes")
        })
      var i = 0
      for (let nam of names){
        if(i==names.length-1){
          //console.log(i)
          $.ajax({
            type: "POST",
            url: "trackattendance.php",
            data: {"ndata": names},
            contentType: 'application/x-www-form-urlencoded'
        });
          //clearInterval(persons)
        }
        i++;
      }
        
 
  }
 ,5000)

    
  

})

function stopCapture(){
  webcam.srcObject = null;
}

function loadimages() {
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
   
  
  





 