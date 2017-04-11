<main class="container container-fluid">
    <h1>Loan - Collecting details...</h1>

    <form method="get">
        <fieldset>
            <legend>Loan Details</legend>
            <label for="capital"></label>
            <input type="number" id="capital" name="capital" min="25000" max="1000000" value="25000"
                   step="5000" required="required" class="form-control"/>

            <label for="rate"></label>
            <input type="number" id="rate" name="rate" min="2" max="9" value="2"
                   step="0.01" required="required" class="form-control"/>

            <label for="years"></label>
            <input type="number" id="years" name="years" min="5" max="30" value="15"
                   step="5" required="required" class="form-control"/>

        </fieldset>
        <button type="submit" id="process-form" class="btn btn-primary">
            <i class="fa fa-fw fa-calculator"></i> Calculate
        </button>
    </form>

</main>