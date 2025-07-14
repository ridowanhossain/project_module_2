<?php

$contacts = [] ;

function addContact(array &$contacts , string $name , string $email , $phone):void
{
    $contacts[] = ['name' => $name , 'email' => $email , 'phone'=>$phone] ;
    // array_push($contacts, ['name' => $name , 'email' => $email , 'phone'=>$phone]) ;
}

function displayContacts(array $contacts):void
{
    if(empty($contacts)){
        echo "No Contacts Available.\n";
    }else{
        foreach($contacts as $contact){
            echo "
 Name : {$contact['name']},
 Email : {$contact['email']},
 Phone : {$contact['phone']}
            ";
        }
    }
}

while(true){
    echo "\nContact Management App : \n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";
    $choice = (int)readline("Choice An Option : ") ;

    if($choice === 1 ){
        $name = readline("Enter Your Name : ");
        $email = readline("Enter Your Email : ");
        $phone = readline("Enter Your Phone : ");

        addContact($contacts , $name , $email , $phone) ;

        echo "$name name added to contacts . \n";
        echo "$email email added to contacts . \n";
        echo "$phone phone added to contacts . \n";
    }elseif($choice === 2 ){
        displayContacts($contacts);
    }elseif($choice === 3 ){
        echo "Exiting...\n";
        break;
    }else{
        echo "Invalid Choice . Please try again . \n";
    }
}
