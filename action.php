<?php
if (!empty($_POST['action'])) {
    // check if all values are passed
    if (!empty($_POST['fname']) && !empty($_POST['fname']) && !empty($_POST['fname']) && !empty($_POST['fname']) && !empty($_POST['fname'])) {
        if (preg_match("/^[6-9]\d{9}$/", $_POST['mobile'])) {
            if (preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $_POST['email'])) {
                if (strlen($_POST['message']) < 15) {
                    $name = $_POST['fname'] . ' ' . $_POST['lname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $message = $_POST['message'];
                    $to = 'parijateyecare@yahoo.com';
                    $subject = "'Contact us Form' From $name";
                    $emailBody = "
                    Name : $name. \n\n
                    Email Address : $email \n\n
                    Mobile Number : $mobile \n\n
                    Message : $message \n\n\n
                    ";
                    if (mail($to, $subject, $emailBody)) {
                        if (!empty($_SERVER['HTTP_REFERER'])) {
                            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?email_status=true');
                        } else {
                            header('location:index.php?email_status=true');
                        }
                    } else {
                        if (!empty($_SERVER['HTTP_REFERER'])) {
                            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?email_status=false');
                        } else {
                            header('location:index.php?email_status=false');
                        }
                    }
                } else {
                    if (!empty($_SERVER['HTTP_REFERER'])) {
                        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg_err=true');
                    } else {
                        header('location:index.php?msg_err=true');
                    }
                }
            } else {
                if (!empty($_SERVER['HTTP_REFERER'])) {
                    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?email_err=true');
                } else {
                    header('location:index.php?email_err=true');
                }
            }
        } else {
            if (!empty($_SERVER['HTTP_REFERER'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER'] . '?mobile_err=true');
            } else {
                header('location:index.php?mobile_err=true');
            }
        }
    } else {
        if (!empty($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?empty_fields=true');
        } else {
            header('location:index.php?empty_fields=true');
        }
    }
} else {
    header('location:index.php');
}
