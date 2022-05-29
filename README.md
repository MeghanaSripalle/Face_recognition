This is the ReadMe File for this Face Recognition project.

INTRODUCTION : 
This project is a web application of a Face Recognition based Attendance System for different classes in a school. It recognises the students through a webcam or uploaded picture and updates their attendance for that date. 
There are two interfaces, namely, the Student interface and Teacher interface. Through the home page (index.php), we can navigate to the login page of students, login page of the teachers or the attendance recording page (attendance can be recorded through the webcam here). By logging into the teacher interface, we can view the attendances of the students on various dates, the attendance for the current day along with the check in time and other features too. 

TECHNOLOGIES USED :
I have used HTML, CSS, BootStrap and Javascript for the front-end development. Ajax has been used for communication between Javascript and PHP, the server-side scripting language. PHP and MySQL have been used for the backend development. MySQL has been used for the Database.

DATABASE :
The name of the database is AttendanceSystem. It has 14 tables : Students, Admins and the 12 different months. The tables named as the different months of the year contain details about the attendance of the students on different days in that particular month. The table 'Students' contains information regarding the students and 'Admins' contains details regarding the teachers. The database will be created when you open the home page (index.php) and run it for the first time. The username is "root" and the password is "". 

FEATURES : 
Recording Attendance (attendance.php) :
Record your attendance if you are a student through the webcam on this page. It has stop and start options for the webcam. The face recognition takes a little bit of time. The face recognition has been done using the face-api.js library. On face recognition, a detection box with your name will be displayed.

Teacher Interface:
1. Viewing the current day's attendance: You can view the updated attendance of each class for that day. All you have to do is enter the class in the search box.
2. Viewing the total attendance of the students : All you have to do is enter the details of the class and month to see the attendance of each student of that class for that month.
3. Viewing the attendance on different dates: This helps the teacher to track the attendance on different dates by knowing who was absent or present on that day.
4. Analysing the attendance : You can find the students who have average attendance or you can track the attendance in the form of a bar graph.
5. Find the students with low attendance for different months by entering the class and month. This will make it easier to contact those students to let them know about their attendance.
6. Record the attendance of students with just an image : Upload an image and wait till the attendance is updated. To upload the image, wait till the cursor becomes a pointer when you place it on the input image field.
7. Search for students based on different details like their name, attendance and last day attended.
8. Classes: The dummy classes are grade 6, 7 and 8. Sample images of real people have been used as the images of the students. 

Student Interface:
1. The student profile appears on the home page.
2. Check if the attendance for the day has been submitted or not.
3. Track your overall attendance for the year and monthly attendances.
4. You will also be notified if you have low attendance for a particular month.


CHALLENGES FACED:
1. Learning about the face-api.js library and how it works.
2. Learning about Bootstrap and Ajax to use them in the project.
3. Working with webcam face recognition.

FUTURE SCOPE:
This application can be developed into an attendance system for a company or school. More classes and people can be incorporated. Other attendance analysis techniques can be added too. It can be used
to track the attendance for each course in a class at a later stage. All the students have to do is go to the website and the webcam feature. The teacher also can click a clear picture of the class for 
recording the attendance of the students in the class. In the case of a company, we can track the working hours of an employee and compare the those to the average working hourse per day. 



INSTRUCTIONS TO RUN THE WEBSITE/ WEB APPLICATION :
1. Clone this git repository.
2. Install the XAMPP Control Panel v3.3.0. Place the cloned folder/ repository 'Face_recognition' in the xampp->htdocs folder. Run XAMPP. Click on Start for Apache and MySQL.
3. You can view the created Database by clicking on 'Admin' beside MySQL. 
4. The database is created when you open index.php (Home Page).
5. To go to the Home Page, open a web Browser like Google Chrome and type 'http://localhost/face_recognition/index.php' in the web address bar.
6. You have 3 options : 'Login as a Student', 'Login as a Teacher','Record Attendance'. The first 2 options are for log in. 'Record Attendance' takes you to webpage for recording a Student's Attendance through the webcam.
7. The credentials for the teachers can be found under the Admins Table as Username (username) and Pass (password). One credential is username: 'meg123' and password : 'meg'.
8. The credentials for the students can be found in the Students Table as Username (username) and User_Password (password). One such credential is username: 'Joey123' and password: '9017'.
9. Login to the Teacher Interface using either of the credentials. On success, the home page of the teacher appears with their profile. You can use the sidebar navigation to navigate to the different pages/ features.
10. You can view the current day attendance (the checked in students and due to check in students), attendance on other dates, low attendance candidates in each class, attendance analytics of each class and the overall attendance of the students of a class.
11. Other features include a search page and record attendance page for recording the attendance through an uploaded image.
12. Similarly, you can login to the Student Interface with any of the credentials. The home page is the profile of the student. 
13. You can navigate to the page which confirms your attendance for the current day or the page which displays your total attendance along with the monthly based attendance.
14. For logging out of the interfaces you have to click on your profile name on the top so that you get the logout button. On logging out, you arrive at the main home page (index.php).

