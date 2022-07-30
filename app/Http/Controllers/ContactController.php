<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
//whether ip is from the remote address
        else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $contact = new Contact();

        $name_contact     =  $request->input('name_contact');
        $lastname_contact    = $request->input('lastname_contact');
        $email_contact    = $request->input('email_contact');
        $phone_contact   = $request->input('phone_contact');
        $message_contact = $request->input('message_contact');
        $verify_contact   =  $request->input('verify_contact');

        $contact->nom = $name_contact;
        $contact->prenom = $lastname_contact;
        $contact->email =$email_contact ;
        $contact->telephone = $phone_contact;
        $contact->message =$message_contact;
        $contact->ip =$ip;

        if(trim($name_contact) == '') {
            echo '<div class="error_message">You must enter your Name.</div>';

        } else if(trim($lastname_contact ) == '') {
            echo '<div class="error_message">You must enter your Last name.</div>';
            exit();
        } else if(trim($email_contact) == '') {
            echo '<div class="error_message">Please enter a valid email address.</div>';
            exit();
        } else if(trim($phone_contact) == '') {
            echo '<div class="error_message">Please enter a valid phone number.</div>';
            exit();
        } else if(!is_numeric($phone_contact)) {
            echo '<div class="error_message">Phone number can only contain numbers.</div>';
            exit();
        } else if(trim($message_contact) == '') {
            echo '<div class="error_message">Please enter your message.</div>';
            exit();
        } else if(!isset($verify_contact) || trim($verify_contact) == '') {
            echo '<div class="error_message"> Please enter the verification number.</div>';
            exit();
        } else if(trim($verify_contact) != '4') {
            echo '<div class="error_message">The verification number you entered is incorrect.</div>';
            exit();
        }

        if(get_magic_quotes_gpc()) {
            $message_contact = stripslashes($message_contact);
        }

//$address = "HERE your email address";
        $address = "hello@coworky.org";
// Below the subject of the email
        $e_subject = 'You\'ve been contacted by ' . $name_contact . '.';
// You can change this if you feel that you need to.
        $e_body = "You have been contacted by $name_contact $lastname_contact with additional message is as follows." . PHP_EOL . PHP_EOL;
        $e_content = "\"$message_contact\"" . PHP_EOL . PHP_EOL;
        $e_reply = "You can contact $lastname_contact via email, $email_contact or via phone $phone_contact";
        $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
        $headers = "From: $email_contact" . PHP_EOL;
        $headers .= "Reply-To: $email_contact" . PHP_EOL;
        $headers .= "MIME-Version: 1.0" . PHP_EOL;
        $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
        $user = "$email_contact";
        $usersubject = "Thank You";
        $userheaders = "From: hello@coworky.org\n";
        $usermessage = "Thank you for contact UDEMA. We will reply shortly!";
        mail($user,$usersubject,$usermessage,$userheaders);
        if($contact->save()) {
            // Success message
            echo "<div id='success_page' style='padding:25px 0'>";
            echo "<strong >Email Sent.</strong><br>";
            echo "Thank you <strong>$name_contact</strong>,<br> your message has been submitted. We will contact you shortly.";
            echo "</div>";
        }
        else
        {
            echo '<div class="error_message">Erreur : merci de ressayer</div>';
            exit();
        }
        mail($address, $e_subject, $msg, $headers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
