<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title ?></title>
    <style>
        @font-face {
            font-family: fontfamily1;
            src: url("assets/fonts/pixeloid.ttf") format("truetype");
        }

        * {
            font-family: 'fontfamily1';
            color: #444444;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a {
            font-weight: 600;
            color: #012970;
        }

        body {
            padding: 2rem;
        }
        @media (max-width: 768px) {
            body {
                padding: .5rem;
            }
        }
    </style>
</head>
<body>