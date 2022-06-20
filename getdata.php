<?php 

    $val = $_GET['selectvalue'];

    $ukraine_universities = array('Kharkiv International Medical University','Taras Shevchenko National Medical University','Kharkiv National Medical University','Vinnitsa National Medical University','Bukovinian State Medical University','Dnipropetrovsk State Medical University','Ivano-Frankvisk National Medical University','Zaporizhzhia State Medical University','V. N. Karazin National Medical University','O O Bogomolets National Medical University','Black Sea National Medical University','Lviv National Medical University','Poltava State Medical University','Kyiv Medical University','Ternopil State Medical University');
    $usa_universities = array('Spartan University of Health and Science','American University of Barbados');
    $poland_universities = array('Medical University of Gdansk','Medical University of Warsaw');
    $kyrgyzstan_universities = array('Osh State Medical University','Kyrgyz State Medical Academy','Asian State Medical University','Jalalabad State Medical University','International State Medical University');
    $kazakhstan_universities = array('Al-Farabi National Medical University','JSC National Medical University','International Medical School');
    $georgia_universities = array('New Vision University','Batumi Shota Rustaveli State Medical University','Tbilisi State Medical University','Davis Tvildiani Medical University','Caucasus International Medical University');
    $russia_universities = array('Moscow University','Krusk State Medical University','Kabardino Balkarian State Medical University','Crimea State Medical University','Kazan Federal University','Mari State Medical University','Bashkir State Medical University','Kuban State Medical University','Krusk State Medical University','Samara State Medical University');
    $philippines_universities = array('AMA University','University of Perpetual Help','Davao Medical College','Our Lady of Fatima University','Emilio Aguinaldo College of Medicine');
    $armenia_universities = array('Yerevan Haybusak University Faculty of Medicine','Yerevan State Medical University');
    $belarus_universities = array('Belarusian State Medical University','Grodno State Medical University','Vitebsk State Medical University');
    $egypt_universities = array('Ain Shyams University Faculty of Medicine','Cairo University Faculty of Medicine');


    switch($val){
        case 'Ukraine' : foreach($ukraine_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'USA' : foreach($usa_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Kyrgyzstan' : foreach($kyrgyzstan_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Georgia' : foreach($georgia_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Poland' : foreach($poland_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Kazakhstan' : foreach($kazakhstan_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Russia' : foreach($russia_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Philippines' : foreach($philippines_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Armenia' : foreach($armenia_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Belarus' : foreach($belarus_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;
        case 'Egypt' : foreach($egypt_universities as $phpval){
            echo  "<option> $phpval </option>";
        }
        break;

        default: echo "No Data has been selected";
    }

?>