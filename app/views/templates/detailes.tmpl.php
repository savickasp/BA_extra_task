<table class="table-border">
    <tbody>
    <?php foreach ($this->table['static'] as $data): ?>
        <tr>
            <td class="table-border">Imones pavadinimas</td>
            <td class="table-border"><?php print $data['name'] ?></td>
        </tr>
        <tr>
            <td class="table-border">Draudejo kodas</td>
            <td class="table-border"><?php print $data['code'] ?></td>
        </tr>
        <tr>
            <td class="table-border">imones kodasd</td>
            <td class="table-border"><?php print $data['jarCode'] ?></td>
        </tr>
        <tr>
            <td class="table-border">Ekonomines veiklos pavadinimas</td>
            <td class="table-border"><?php print $data['ecoActName'] ?></td>
        </tr>
        <tr>
            <td class="table-border">Ekonomines veiklos kodas</td>
            <td class="table-border"><?php print $data['ecoActCode'] ?></td>
        </tr>
        <tr>
            <td class="table-border">Vykdomos veiklos apskritis</td>
            <td class="table-border"><?php print $data['municipality'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div>Average wage</div>
<table class="table-border">
    <tbody>
    <tr>
        <td class="table-border">Months</td>
        <?php foreach ($this->table['monthly']['wage'] as $values): ?>
            <td class="table-border"><?php print $values['month']; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td class="table-border">average wage</td>
        <?php foreach ($this->table['monthly']['wage'] as $values): ?>
            <td class="table-border"><?php print $values['avgWage']; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td class="table-border">average wage 2</td>
        <?php foreach ($this->table['monthly']['wage'] as $values): ?>
            <td class="table-border"><?php print $values['avgWage2']; ?></td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>
<div>Insured</div>
<table class="table-border">
    <tbody>
    <tr>
        <td class="table-border">Months</td>
        <?php foreach ($this->table['monthly']['insured'] as $values): ?>
            <td class="table-border"><?php print $values['month']; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td class="table-border">number insured</td>
        <?php foreach ($this->table['monthly']['insured'] as $values): ?>
            <td class="table-border"><?php print $values['numInsured']; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td class="table-border">number insured 2</td>
        <?php foreach ($this->table['monthly']['insured'] as $values): ?>
            <td class="table-border"><?php print $values['numInsured2']; ?></td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>
<div>Taxes</div>
<table class="table-border">
    <tbody>
    <tr>
        <td class="table-border">Months</td>
        <?php foreach ($this->table['monthly']['tax'] as $values): ?>
            <td class="table-border"><?php print $values['month']; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td class="table-border">average wage</td>
        <?php foreach ($this->table['monthly']['tax'] as $values): ?>
            <td class="table-border"><?php print $values['tax']; ?></td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>