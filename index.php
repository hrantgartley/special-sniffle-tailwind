<!doctype html>
<html lang="en">

<head>
    <title>MY title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/styles.css">

</head>

<body>
    <main>
        <?php


        /**
         * Prints the "selected" attribute if the given value matches the selected value.
         *
         * @param mixed $value The value to compare.
         * @param mixed $selected The selected value.
         * @return void
         */
        function printSelectedValueFromSelect($value, $selected) {
            if ($value == $selected) {
                echo 'selected';
            }
        }
        $selectedValue = isset($_POST['cars']) ? $_POST['cars'] : '';

        ?>
        <form method="post">
            <select name="cars" id="cars" required>
                <option value="">None</option>
                <option value="volvo" <?php printSelectedValueFromSelect('volvo', $selectedValue); ?>>Volvo</option>
                <option value="camry" <?php printSelectedValueFromSelect('camry', $selectedValue); ?>>Camry</option>
                <option value="audi" <?php printSelectedValueFromSelect('audi', $selectedValue); ?>>Audi</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary text-red-600">Submit</button>
        </form>
        <?php
        $filterd_data = filter_input(INPUT_POST, 'cars', FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(volvo|camry|audi)$/")));
        echo "Value that user selected was " . $selectedValue;
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>