<?php 
header('Access-Control-Allow-Origin: *'); 

$target_path="uploads/";
$target_path="F:/Aqib Master's in Computer Science/Mbl App Development/Aqib_30119471_Landmark_Assessment_Theme_3_Mbl App_Dev/frontend/assets/images/";
$target_path=$target_path.basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
    header('Content-type:application/json');
    $data=['success'=>true,'image'=>basename($_FILES['file']['name']),'message'=>'Upload and move success'];
    echo json_encode($data);
}
else{
    header('Content-type:application/json');
    $data=['false'=>true,'message'=>'Issue in uploading file'];
    echo json_encode($data);
}
?>