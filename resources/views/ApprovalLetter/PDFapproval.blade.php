<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Approval Letter</title>

    <style>
      h3{
        text-align: center;
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(0, 0, 0, var(--tw-border-opacity));
        border-width: 2px;
        
      }

      h2 {
        background-color: #39837E;
        color: white;
        font-size: 12px;
        padding: 5px;
        margin: 10px;
        }
        p{
            font-size: 14px;  
        }
    </style>

  </head>

  <body>
    <img src="http://iium.edu.my/media/19231/IIUM-Full-Logo-Colour.jpg" style="width: 80vw; min-width: 300px;"/>
<br>
    <h2 for="">STUDENT AFFAIRS AND DEVELOPMENT DIVISION</h2>
    

    <p><b>Date : {{ date('d/m/Y') }}</b></p><br>
    <h4>TO WHOM IT MAY CONCERN</h4><br>
    <p><b>Dear Sir/Madam,</b></p>
    <h4>PROGRAMME APPROVAL LETTER</h4>
    <p>This is to certify that the below name is permitted to organize programme as details below under International Islamic University Malaysia supervision. </p>
    <p><b>Applicant's Name : {{$user->name}}</b></p>
    <p><b>Applicant's Email : {{$user->email}}</b></p>
    <p><b>Programme Name : {{$proposal->programmeName}}</b></p>
    <p><b>Programme Organizer : {{$proposal->programmeOrganizer}}</b></p>
    <p><b>Programme Date : {{$proposal->startDate}}</b></p>
    <p><b>Programme Venue : {{$proposal->venue}}</b></p><br>
    <p>Any kind of assistance rendered to the applicant is greatly appreciated. </p>
    <p>Thank you.</p><br>
    <h4>"LEADING THE WAY"</h4>
    <p><i>This is a computer generated document. No signature is required.</i></p>
  </body>
</html>