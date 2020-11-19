<table class="table">
    <tr class="border">
        <?php foreach ($table['headers'] as $header): ?>
            <th class="border"><?php print $header; ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($table['rows'] as $entries): ?>
        <tr class="border">
            <?php foreach ($entries as $entry): ?>
                <td class="border"><?php print $entry; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>