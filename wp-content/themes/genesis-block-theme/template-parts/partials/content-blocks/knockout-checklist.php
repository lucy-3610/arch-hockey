<?php

/**
 * Template part for displaying the knockout checklist partial
 */

//Advanced Custom Fields
$hide_block      = get_sub_field('hide_block');

$checklist_title = get_sub_field('checklist_title');

?>

<?php if (empty($hide_block)) : ?>

    <!-- KNOCKOUT CHECKLIST 
	======================================== -->
    <section class="knockout-checklist">
        <div class="container">
            <div class="row">
                <h1><?php echo $checklist_title; ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php if (have_rows('checklist')) : ?>
                        <?php while (have_rows('checklist')) : the_row();
                            $bullet = get_sub_field('bullet');
                        ?>

                            <input type="checkbox" value="" data-bind="checked: spamFlavors" />
                            <?php echo $bullet; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="readout">
        <h3>What's in the model?</h3>
        <table>
            <tr>
                <td class="label">Bool value:</td>
                <td data-bind='text: booleanValue() ? "True" : "False"'></td>
            </tr>
        </table>
    </div>

    <h3>HTML controls</h3>
    <table>
        <tr>
            <td class="label">Checkbox:</td>
            <td><input type="checkbox" data-bind="checked: booleanValue" /></td>
        </tr>
    </table>

    <p>Send me spam: <input type="checkbox" data-bind="checked: booleanValue" /></p>
    <div data-bind="visible: booleanValue">
        Preferred flavors of spam:
        <div><input type="checkbox" value="cherry" data-bind="checked: spamFlavors" /> Cherry</div>
        <div><input type="checkbox" value="almond" data-bind="checked: spamFlavors" /> Almond</div>
        <div><input type="checkbox" value="msg" data-bind="checked: spamFlavors" /> Monosodium Glutamate</div>
    </div>

    <script>
        var viewModel = {
            booleanValue: ko.observable(true),
            spamFlavors: ko.observableArray(["cherry", "almond"])
        };
        ko.applyBindings(viewModel);

        // var spamViewModel = {
        //     wantsSpam: ko.observable(true),
        //     spamFlavors: ko.observableArray(["cherry", "almond"]) // Initially checks the Cherry and Almond checkboxes
        // };
        // // ... then later ...
        // // spamViewModel.spamFlavors.push("msg"); // Now additionally checks the Monosodium Glutamate checkbox
        // ko.applyBindings(spamViewModel);
    </script>

<?php endif; ?>