<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

    <div style="height: 600px;  text-align:center; margin-top: 6rem">
        <div style="padding: 0 auto; ">
            <img src="https://i.ibb.co/MVCCTpK/email.png" alt="email" border="0">
            <h1
                style="text-align: center; font-family: 'Inter'; font-size: 25px; line-height: 30px;  color:#010414;  font-weight: 900">
                {{ __('Confirmation email') }}
            </h1>
            <p style="text-align: center; line-height: 22px;  font-size: 18px; font-weight: 400; color:#010414;">
                {{ __('click this button to verify your email') }}
            </p>
            <a
                href="https://coronatime.nikoloz.redberryinternship.ge/mail-verify?code={{ $email_data['verification_code'] }}">
                <button
                    style="background-color: #0FBA68; height: 56px; width: 392px; margin-top:30px; padding: 1rem; color: white; font-size: 1.2rem; width: 400px; font-weight: 900; border:#0FBA68;  border-radius: 10px;">
                    {{ __('VERIFY EMAIL ') }}
                </button>
            </a>
        </div>
    </div>

</body>

</html>
