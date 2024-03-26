<?php
// define('AT_username', 'sandbox');
// define('AT_APIKEY', '');
// define('AT_ENVIROMENT','sandbox')

$sessionId = $_POST["sessionId"] ??null;
$serviceCode = $_POST["serviceCode"] ??null;
$phoneNumber = $_POST["phoneNumber"] ??null;
$text = $_POST["text"]??null;

if ($text == "") {
    $response =  "WELCOME :) \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n"; 
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
} else if ($text == "0") {
    $response = "CON Choose infrormation you want to view \n";
    $response .= "0. Enter Pin No \n";
} else if ($text == "1") {
    $response = "CON Choose the Medicine Job you want \n";
    $response .= "1. Surgery \n";
    $response .= "2. Dentist \n";
    $response .= "3. Gynacologyt \n";
    $response .= "4. General practice doctor \n";
    $response .= "5. Back ";
    # code...
} else if ($text == "2") {
    $response = "CON Choose the Engineering Job you want \n";
    $response .= "1. Marine engineer \n";
    $response .= "2. Industrial engineer \n";
    $response .= "3. Mechanical engineer \n";
    $response .= "4. Civil engineer \n";
    $response .= "5. Electrical engineer \n";
    $response .= "6. Software engineer \n";
    $response .= "7. Back";
} else if ($text == "3") {
    $response = "CON Choose the Education Job you want \n";
    $response .= "1. ECDE teacher \n";
    $response .= "2. Junior secondary teacher \n";
    $response .= "3. Senior secondary teacher \n";
    $response .= "4. University lecture \n";
    $response .= "5. Special need teacher \n";
    $response .= "6. College teacher \n";
    $response .= "7. Back";
} else if ($text == "4") {
    $response = "CON Choose the IT Job you want \n";
    $response .= "1. Web Developer \n";
    $response .= "2. Database administrator \n";
    $response .= "3. Computer programmer \n";
    $response .= "4. Data science \n";
    $response .= "5. Help desk analyst \n";
    $response .= "6. System administrator \n";
    $response .= "7. Back";
} else if ($text == "5") {
    $response = "CON Choose the Hospitality Job you want \n";
    $response .= "1. Front office receptionist \n";
    $response .= "2. Hospitality assistant \n";
    $response .= "3. Event organizesr \n";
    $response .= "4. Guest relations cooedinator \n";
    $response .= "5. Spa receptionist \n";
    $response .= "6. Confrence assistant \n";
    $response .= "7. Back";
} else if ($text == "6") {
    $response = "CON Choose the Business Job you want \n";
    $response .= "1. Human resource \n";
    $response .= "2. Accounting \n";
    $response .= "3. Procurement \n";
    $response .= "4. Auditing \n";
    $response .= "5. Supply chain managment \n";
    $response .= "6. Logistics \n";
    $response .= "7. Back";
} else if ($text == "7") {
    $response = "CON Choose the Music Job you want \n";
    $response .= "1. Actor \n";
    $response .= "2. Production assistant \n";
    $response .= "3. Sound engineer \n";
    $response .= "4. Public relatons assistant \n";
    $response .= "5. Social media coordinatoe \n";
    $response .= "6. Event coordinator \n";
    $response .= "7. Back";
} else if ($text == "8") {
    $response = "CON Do you want to quit service \n";
    $response .= "1. Enter Pin \n";
    $response .= "2. Back";
    $response = "END Thanks You And Goodbye";
} else if ($text == "1*1") {
    $response = "END Your Surgery Jobs are ".$surgeryJobDetail;
} else if ($text == "1*2") {
    $response = "END Your Dentistry Jobs are ".$dentistryJobDetail;
} else if ($text == "1*3") {
    $response = "END Your Gynacological Jobs are ".$gynacologyJobDetail;
} else if ($text == "1*4") {
    $response = "END Your General practice doctor Jobs are ".$generalPracticeDoctorJobDetail;
} else if ($text == "1*5") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
} else if ($text == "2*1") {
    $response = "END Your Marine engineering Jobs are ".$marineEngineeringJobDetail;
} else if ($text == "2*2") {
    $response = "END Your Industrial engineering Jobs are ".$industrialEngineerJobDetail;
} else if ($text == "2*3") {
    $response = "END Your Mechanical engineering Jobs are ".$mechanicalEngineerJobDetail;
} else if ($text == "2*4") {
    $response = "END Your Civil engineering Jobs are ".$civilEngineerJobDetail;  
} else if ($text == "2*5") {
    $response = "END Your Electrical engineering Jobs are ".$electricalEngineeringJobDetail;
} else if ($text == "2*6") {
    $response = "END Your Software engineering Jobs are ".$softwareEngineerJobDetail;
} else if ($text == "2*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
} else if ($text == "3*1") {
    $response = "END Your ECDE teachering Jobs are ".$ecdeTeacherJobDetail;  
} else if ($text == "3*2") {
    $response = "END Your Junior secondary teachering Jobs are ".$juniorSecondaryTeacheringJobDetail;
} else if ($text == "3*3") {
    $response = "END Your Senior secondary teachering Jobs are ".$seniorSecondaryTeacheringJobDetail;
} else if ($text == "3*4") {
    $response = "END Your University Lecturer Jobs are ".$universityLecturerJobDetail;
} else if ($text == "3*5") {
    $response = "END Your Special Need Teacher are ".$specialNeedTeacherJobDetail;  
} else if ($text == "3*6") {
    $response = "END Your College Teacher Jobs are ".$collegeTeacherJobDetail;
} else if ($text == "3*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine   \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
} else if ($text == "4*1") {
    $response = "END Your Web Developer Jobs are ".$webDeveloperJobDetail;  
} else if ($text == "4*2") {
    $response = "END Your Database Administrator Jobs are ".$databaseAdministratorJobDetail;
} else if ($text == "4*3") {
    $response = "END Your Computer Programmer Jobs are ".$computerProgrammerJobDetail;
} else if ($text == "4*4") {
    $response = "END Your Data Science Jobs are ".$dataScienceJobDetail;
} else if ($text == "4*5") {
    $response = "END Your Help Desk Analyst Jobs are ".$helpDeskAnalystJobDetail;  
} else if ($text == "4*6") {
    $response = "END Your System Administrator Jobs are ".$systemAdministratorJobDetail;
} else if ($text == "4*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";  
} else if ($text == "5*1") {
    $response = "END Your Front Office Receptionist Jobs are ".$frontOfficeReceptionistJobDetail;  
} else if ($text == "5*2") {
    $response = "END Your Hospitality Assistant Jobs are ".$hospitalityAssistantJobDetail;
} else if ($text == "5*3") {
    $response = "END Your Event Organiser Jobs are ".$eventOrganiserJobDetail;
} else if ($text == "5*4") {
    $response = "END Your Guest Relatins Coordinator Jobs are ".$guestRelatinsCoordinatorJobDetail;
} else if ($text == "5*5") {
    $response = "END Your Spa Receptionist Jobs are ".$spaReceptionistJobDetail;  
} else if ($text == "5*6") {
    $response = "END Your Confrence Assistant Jobs are ".$confrenceAssistantJobDetail;
} else if ($text == "5*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering    \n";
    $response .= "3. Education \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
} else if ($text == "6*1") {
    $response = "END Your Human Resource Jobs are ".$humanResourceJobDetail;  
} else if ($text == "6*2") {
    $response = "END Your Accounting Jobs are ".$accountingJobDetail;
} else if ($text == "6*3") {
    $response = "END Your Procurement Jobs are ".$procurementJobDetail;
} else if ($text == "6*4") {
    $response = "END Your Auditing Jobs are ".$auditingJobDetail;
} else if ($text == "6*5") {
    $response = "END Your Supply Chain Managment Jobs are ".$supplyChainManagmentJobDetail;  
} else if ($text == "6*6") {
    $response = "END Your Logistics Jobs are ".$logisticsJobDetail;
} else if ($text == "6*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education  \n";
    $response .= "4. It \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";      
} else if ($text == "7*1") {
    $response = "END Your Actor Jobs are ".$actorJobDetail;  
} else if ($text == "7*2") {
    $response = "END Your Production Assistance Jobs are ".$productionAssistanceJobDetail;
} else if ($text == "7*3") {
    $response = "END Your Sound Engineer Jobs are ".$soundEngineerJobDetail;
} else if ($text == "7*4") {
    $response = "END Your Public Relation Assistance Jobs are ".$publicRelationAssistanceJobDetail;
} else if ($text == "7*5") {
    $response = "END Your Social Media Coordinator Jobs are ".$socialMediaCoordinatorJobDetail;  
} else if ($text == "7*6") {
    $response = "END Your Event Coordinator Jobs are ".$eventCoordinatorJobDetail;
} else if ($text == "7*7") {
    $response = "CON what would you want to check \n";
    $response .= "0. Login \n";
    $response .= "1. Medicine \n";
    $response .= "2. Engineering \n";
    $response .= "3. Education \n";
    $response .= "4. It works \n";
    $response .= "5. Hospitality \n";
    $response .= "6. Business \n";
    $response .= "7. Music \n";
    $response .= "8. Exit/Logout \n";
    $response = "Your response here";
}

header('Content-Type: text/plain');
echo $response;


?>
