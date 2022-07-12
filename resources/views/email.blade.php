<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
        }
    </style>
    <div
        style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
            style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
            <tbody class="bg-white">
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding: 40px">
                        <a href="kazcodez.dev" rel="noopener" target="_blank">
                            <img alt="Logo" class="img-fluid" src="{{ asset('assets/logo/kazLogo.PNG') }}" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="background-color:#2F3044;" class=" p-3 text-center fw-bold fs-5 text-light">
                            <p>Hello Kaz, You have a contact email from your portfolio website.</p>
                        </div>
                        <div
                            style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                            <!--begin:Email content-->

                            <div class="d-flex">
                                <p class="me-2"><strong>Name:</strong> </p>
                                <span>{{ $FormFields['name'] }}</span>
                            </div>
                            <div class="d-flex">
                                <p class="me-2"><strong>Email:</strong> </p>
                                <span>{{ $FormFields['email'] }}</span>
                            </div>

                            <br>
                            <div class="text-center">
                                <h2>Message</h2>
                            </div>
                            <div class="text-center">
                                <p>{{ $FormFields['message'] }}</p>
                            </div>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
