<?php
require_once 'db_config.php';

try {
    // Get the JSON data from the request
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Generate a unique report ID
    $reportId = uniqid();
    
    // Prepare SQL statement
    $sql = "INSERT INTO child_assessments (
        report_id,
        child_name,
        dob,
        iep_start_date,
        grade_level,
        gender,
        parent_name,
        phone,
        email,
        primary_language,
        medical_conditions,
        sat_age,
        crawl_age,
        walk_age,
        first_words_age,
        sentences_age,
        previous_school,
        special_ed,
        iep,
        areas_of_concern,
        typical_behavior,
        created_at
    ) VALUES (
        :report_id,
        :child_name,
        :dob,
        :iep_start_date,
        :grade_level,
        :gender,
        :parent_name,
        :phone,
        :email,
        :primary_language,
        :medical_conditions,
        :sat_age,
        :crawl_age,
        :walk_age,
        :first_words_age,
        :sentences_age,
        :previous_school,
        :special_ed,
        :iep,
        :areas_of_concern,
        :typical_behavior,
        NOW()
    )";

    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':report_id', $reportId);
    $stmt->bindParam(':child_name', $data['childName']);
    $stmt->bindParam(':dob', $data['dob']);
    $stmt->bindParam(':iep_start_date', $data['iepStartDate']);
    $stmt->bindParam(':grade_level', $data['gradeLevel']);
    $stmt->bindParam(':gender', $data['gender']);
    $stmt->bindParam(':parent_name', $data['parentName']);
    $stmt->bindParam(':phone', $data['phone']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':primary_language', $data['primaryLanguage']);
    $stmt->bindParam(':medical_conditions', json_encode($data['medicalConditions']));
    $stmt->bindParam(':sat_age', $data['satAge']);
    $stmt->bindParam(':crawl_age', $data['crawlAge']);
    $stmt->bindParam(':walk_age', $data['walkAge']);
    $stmt->bindParam(':first_words_age', $data['firstWordsAge']);
    $stmt->bindParam(':sentences_age', $data['sentencesAge']);
    $stmt->bindParam(':previous_school', $data['previousSchool']);
    $stmt->bindParam(':special_ed', $data['specialEd']);
    $stmt->bindParam(':iep', $data['iep']);
    $stmt->bindParam(':areas_of_concern', json_encode($data['areasOfConcern']));
    $stmt->bindParam(':typical_behavior', $data['typicalBehavior']);
    
    $stmt->execute();
    
    echo json_encode(['success' => true, 'report_id' => $reportId]);
    
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?> 