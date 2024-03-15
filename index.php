<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - PHP</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container text-center p-5 mt-5 rounded-5" style="background-color: #E5EFFE">
    
        <h1>
            *****
        </h1>

    </div>
    
    <div class="container text-center p-5 mt-2 rounded-5" style="background-color: #E5EFFE">

        <form action="request.php" class="d-flex gap-5 align-items-end">
            <div class="d-flex flex-column gap-2 flex-grow-1">
                <label for="paragraph">Inserisci un paragrafo</label>
                <input id="paragraph" name="paragraph" type="text" placeholder="Testo del paragrafo" class="border-0 p-2 rounded-3">
            </div>
            <div class="d-flex flex-column gap-2">
                <label for="badword">Parola da censurare</label>
                <input id="badword" name="badword" type="text" placeholder="******" class="border-0 p-2 rounded-3">
            </div>
            <input type="submit" class="px-5 py-2 bg-primary rounded-3 border border-primary text-white">
        </form>

    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>