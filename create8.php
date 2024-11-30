
<?php include('template.php'); ?>
<div class="content">
<form method="POST" action="process_create2.php" enctype="multipart/form-data">
            <h1>Create a new order</h1>

          
                <legend>Receiving: </legend>
                <label for="customer_id">Customer ID: <br> </label>
                <input type="text" id="customer_id" name="customer_id" maxlength="8"  placeholder="Type the customer's ID here">
                

                <div class="row">
                    <div>
                        <label for="smartphones_qty">Smartphones:</label>
                        <input type="number" id="smartphones_qty" name="smartphones_qty" min="0" placeholder="please type the quantity">
                    </div>
                    <div>
                        <label for="tablets_qty">Tablets:</label>
                        <input type="number" id="tablets_qty" name="tablets_qty" min="0" placeholder="please type the quantity">
                    </div> 
                </div>

                <label for="other_qty">Other:</label>
                <input type="number" id="other_qty" name="other_qty" min="0" placeholder="please type the quantity">

                <label for="image_upload">Upload Picture:</label>
                <input type="file" id="image_upload" name="image_upload" accept="image/*"> <br>

                <label for="image_upload">Upload Picture:</label>
                <input type="file" id="image_upload" name="image_upload" accept="image/*"> <br> 

                <label for="image_upload">Upload Picture:</label>
                <input type="file" id="image_upload" name="image_upload" accept="image/*"> <br>
            </fieldset>

            <!-- <fieldset id="section2">
                <legend>Step 1 - Screening:</legend>
                <label for="step1_failed_qty">Step 1 Failed:</label>
                <input type="number" id="step1_failed_qty" name="step1_failed_qty" min="0" placeholder="please type the quantity">
            </fieldset>

            <fieldset id="section3">
                <legend>Step 2 - Charging and hard reset:</legend>
                <label for="FRP_kiste_qty">FRP Kiste:</label>
                <input type="number" id="FRP_kiste_qty" name="FRP_kiste_qty" min="0" placeholder="please type the quantity">

                <div class="row">
                    <div>
                        <label for="bootloop_qty">Bootloop:</label>
                        <input type="number" id="bootloop_qty" name="bootloop_qty" min="0" placeholder="please type the quantity">
                    </div>
                    <div>
                        <label for="keine_reaktion_qty">Keine Reaktion:</label>
                        <input type="number" id="keine_reaktion_qty" name="keine_reaktion_qty" min="0" placeholder="please type the quantity">
                    </div>
                </div>
            </fieldset>

            <fieldset id="section4">
                <legend>Step 3 - Erasure and Test:</legend>
                <label for="step3_failed_qty">Step 3 Failed:</label>
                <input type="number" id="step3_failed_qty" name="step3_failed_qty" min="0" placeholder="please type the quantity">
            </fieldset> -->

            <button type="submit">Submit</button>
        </form>
        </div>