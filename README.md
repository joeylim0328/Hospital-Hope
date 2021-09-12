# Hospital-Hope
Hospital-Hope is a hospital management system. This management system helps to digitalize the management of the hospital so that everything is more organized. The hospital management system will have three major features, namely making an appointment, view doctor's directory and making an enquiry all with the use of a chatbot. Our main objective is to reduce the long queue of patients in the hospital regardless of their purpose. This system is going to solve this by allowing users to queue virtually. Not only that, by saving the patients' records in a database, it is easy for the hospital staffs to trace the records. In this system, a chatbot is created to assist the patients if they need immediate feedback. 

# Program description
### ERD
![erd](/Screenshots/erd.jpg?raw=true)

### Use case diagram
![ucd](/Screenshots/ucd.jpg?raw=true)

# Screenshot
### Interface of system
![screenshot1](/Screenshots/ss_1.JPG?raw=true)  
This system has two user types, patient and administrator. Both types of users have different roles.
1. Patient
- View doctor details (name, contact number, email and specialty)
- Make appointment
- Make an enquiry to the chatbot
2. Administrator
- Add doctor details
- Edit doctor details
- Delete doctor details
- View patient details
- Edit patient details
- Delete patient details

### Sample input & output
1. Let's say the user is new to this system. The patient can click into the 'TRY OUT CHATBOT!' option to make enquiries. In the chatbot, the patient can type out their question. In this case, a sample question is typed into the chatbot: I need help, then the chatbot will give a link to the patient to view the doctor details.
![screenshot2](/Screenshots/ss_2.JPG?raw=true)

2. If the patient clicks into the link given by the chatbot (this can also be done by clicking the 'make appointment' option in the home page), it will direct the patient to the 'Our Doctors' page. In this page, the patient can search for doctors by their specialty or name.
![screenshot3](/Screenshots/ss_3.JPG?raw=true)

3. If the patient wants to make an appointment with the particular doctor, the patient can make an appointment in this page. Press 'add patient's appointment' after the details are filled in.
![screenshot4](/Screenshots/ss_4.JPG?raw=true)

4. If the user is an admin, the admin has to sign in to the system.
![screenshot5](/Screenshots/ss_5.JPG?raw=true)

5. When the admin keys in the correct password, the admin is redirected to the admin page, where they are allowed to perform modifications in both the patient and doctor details. 
![screenshot6](/Screenshots/ss_6.JPG?raw=true)

6. If the admin wants to add a new doctor in the database, the admin has to key in some details: name, contact number, email address, specialty
![screenshot7](/Screenshots/ss_7.JPG?raw=true)

7. To modify or delete doctor records, the admin can either search by specialty or doctor's name.
![screenshot8](/Screenshots/ss_8.JPG?raw=true)

8. To add, edit and search for patient's records, the admin has to key in some details to do so.
![screenshot9](/Screenshots/ss_9.JPG?raw=true)
- Add patient's record
![screenshot10](/Screenshots/ss_10.JPG?raw=true)
- Edit patient's record
![screenshot11](/Screenshots/ss_11.JPG?raw=true)
- Search patient's record
![screenshot12](/Screenshots/ss_12.JPG?raw=true)

9. To check the appointments made by the patients, the admin has to click the 'check appointment' option.
![screenshot13](/Screenshots/ss_13.JPG?raw=true)

# Authors
Joey Lim, Y.F.,Tan, T.C.,Chan, J.H.,Chia, J.M.,Chua, I.K.Z,Lee, Q.H.,Lau, J.Z.,Neow.

# Others
This project is made for my `TSE 2231 Software Engineering Fundamentals` subject. The original program of this assignment is modified and updated.