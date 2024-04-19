# PHP Mailer Project

This project is a Template for sending E-mails using PHPMailer Library of PHP.

## Requirements

- [XAMPP](https://www.apachefriends.org/index.html) installed on your local machine.

## Installation

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/Shivamingale3/PHP-Mail-template.git
    ```

2. Place the cloned repository inside the `htdocs` directory of your XAMPP installation. By default, the `htdocs` directory can be found in:
   
    - **Windows**: `C:\xampp\htdocs`

3. Start XAMPP and ensure that Apache is are running.

4. Set 2-Step Authentication ON & Get App Password from Google Security Panel.


5. Configure SMTP settings:
    - Open the `send.php` file located in the root directory of this project.
    - Set you E-mail in:
    $mail->Username = '';
    $mail->setFrom('');
    - Set App Password here:
    $mail->Password = '';

6. Access the project in your web browser:
   
    - Open your web browser and access the Project from localhost.
    - You should see the form for sending emails.

## Usage

- Fill out the form fields including recipient Reciever Mail address, subject, and message.
- Click on the "Submit" button to send the email.
- After successful submission, you will receive an alert confirming that the email was sent successfully.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any bugs, feature requests, or improvements.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
