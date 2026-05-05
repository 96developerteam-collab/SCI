<!DOCTYPE html>
<html>
<head>
    <title>Award Details</title>

    <style>
        @page { margin: 12mm; }

        body {
            font-family: "Times New Roman", serif;
            font-size: 10pt;
            line-height: 1.3;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 20pt;
            margin: 10px 0 6px 0;
            text-transform: uppercase;
        }

        h2 {
            text-align: center;
            font-size: 11pt;
            margin: 10px 0 18px 0;
            text-transform: uppercase;
        }

        .logo {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .field {
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .label {
            display: inline-block;
            width: 200px;
            color: red;
            font-weight: bold;
        }

        .signature {
            margin-top: 90px;
            text-align: right;
        }

        .page-break {
            page-break-before: always;
        }

        /* -------- DETAILS SECTION -------- */
        .details-section {
            page-break-before: always;
            margin-top: 10px;
        }
        
        .details-title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            color: red;
            margin-bottom: 15px;
            border-bottom: 2px solid red;
            padding-bottom: 5px;
        }
        
        .details-container {
            margin: 0 auto;
            max-width: 100%;
        }
        
        .details-row {
            display: flex;
            margin-bottom: 8px;
            page-break-inside: avoid;
        }
        
        .details-label {
            flex: 0 0 180px;
            font-weight: bold;
            color: #333;
        }
        
        .details-value {
            flex: 1;
            text-align: justify;
        }
        
        .achievements-section {
            margin-top: 15px;
            page-break-inside: avoid;
        }
        
        .achievements-title {
            font-weight: bold;
            color: red;
            margin-bottom: 8px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 3px;
        }
        
        .achievements-content {
            text-align: justify;
            font-size: 10pt;
            line-height: 1.4;
        }

        /* -------- CRITERIA SECTION -------- */
        .criteria-page {
            page-break-before: always;
            column-count: 2;
            column-gap: 20px;
            margin-top: 20px;
        }

        .criteria-block {
            break-inside: avoid;
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .criteria-title {
            font-weight: bold;
            color: red;
            font-size: 11pt;
            text-align: center;
            margin-top: 8px;
            margin-bottom: 6px;
        }

        .criteria-text {
            text-align: justify;
            font-size: 10pt;
            margin-top: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
            break-inside: avoid;
        }

        td {
            width: 50%;
            padding: 4px;
            text-align: center;
        }

        img {
            max-height: 110px;
            max-width: 100%;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

<!-- ================= PAGE 1 : COVER ================= -->

<div class="logo">
    <img src="<?= FCPATH . 'template/front/images/logo.png'; ?>" width="100">
</div>

<h1>Senior Chamber International</h1>

<h2>
    National Awards<br>
    Award Entry Form <?= $entry['year']; ?> - <?= $entry['year'] + 1; ?><br>
    <span style="font-weight:normal;">Awards for <?= ucfirst($entry['award_for']); ?>s</span>
</h2>

<?php
$form_data = ($entry['award_for'] == 'legion')
    ? json_decode($entry['legion_form_json'], true)
    : json_decode($entry['individual_form_json'], true);
?>

<div style="margin-left:10px; margin-top:12px;">
    <div class="field"><span class="label">Name of the Award:</span> <?= $entry['category']; ?></div>
    <div class="field"><span class="label">Name of the Legion:</span> <?= $entry['legion_name']; ?></div>

    <?php if ($entry['award_for'] == 'individual'): ?>
        <div class="field"><span class="label">Nominee:</span> <?= $entry['nominee_name']; ?></div>
    <?php endif; ?>

    <div class="field"><span class="label">Address:</span> <?= $form_data['legion_address'] ?? ($form_data['mailing_address'] ?? 'N/A'); ?></div>
    
    <?php if ($entry['award_for'] == 'legion'): ?>
        <div class="field"><span class="label">Members:</span> <?= $form_data['members_count'] ?? 'N/A'; ?></div>
        <div class="field"><span class="label">Affiliation Date:</span> <?= $form_data['affiliation_date'] ?? 'N/A'; ?></div>
    <?php endif; ?>
    
    <div class="field"><span class="label">Date:</span> <?= date('d/m/Y', strtotime($entry['created_at'])); ?></div>
</div>

<div class="signature">
    Signature<br><br>
    President / Secretary
</div>

<!-- ================= PAGE 2 : DETAILS SECTION ================= -->

<div class="details-section">
    <div class="details-title">AWARD ENTRY DETAILS</div>
    
    <div class="details-container">
        <!-- Common Award Information -->
        <div class="details-row">
            <div class="details-label">Award Name:</div>
            <div class="details-value"><?= htmlspecialchars($form_data['award_name'] ?? ($entry['category'] ?? 'OUTSTANDING ' . strtoupper($entry['award_for']))); ?></div>
        </div>
        
        <?php if ($entry['award_for'] == 'legion'): ?>
            <!-- LEGION SPECIFIC DETAILS -->
            <div class="details-row">
                <div class="details-label">President Name:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['president_name'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Legion Address:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['legion_address'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Members Count:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['members_count'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Affiliation Date:</div>
                <div class="details-value"><?= !empty($form_data['affiliation_date']) ? date('d/m/Y', strtotime($form_data['affiliation_date'])) : 'N/A'; ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Project Name:</div>
                <div class="details-value"><?= !empty($form_data['project_name']) ? htmlspecialchars($form_data['project_name']) : 'N/A'; ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Project Date:</div>
                <div class="details-value"><?= !empty($form_data['project_date']) ? date('d/m/Y', strtotime($form_data['project_date'])) : 'N/A'; ?></div>
            </div>
            
        <?php else: ?>
            <!-- INDIVIDUAL SPECIFIC DETAILS -->
            <div class="details-row">
                <div class="details-label">Proposed By:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['proposed_by'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Year of Charter:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['year_of_charter'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Mailing Address:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['mailing_address'] ?? ($form_data['legion_address'] ?? 'N/A')); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Age:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['age'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Sex:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['sex'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Qualifications:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['qualifications'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Vocation:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['vocation'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Marital Status:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['marital_status'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Spouse Name:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['spouse_name'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Children Names:</div>
                <div class="details-value"><?= htmlspecialchars($form_data['children_names'] ?? 'N/A'); ?></div>
            </div>
            
            <div class="details-row">
                <div class="details-label">Legion Award Date:</div>
                <div class="details-value"><?= !empty($form_data['legion_award_date']) ? date('d/m/Y', strtotime($form_data['legion_award_date'])) : 'N/A'; ?></div>
            </div>
            
        <?php endif; ?>
        
        <!-- Major Achievements Section (Common for both) -->
        <div class="achievements-section">
            <div class="achievements-title">MAJOR ACHIEVEMENTS</div>
            <div class="achievements-content">
                <?php 
                if (!empty($form_data['major_achievements'])) {
                    // Clean and format the achievements text
                    $achievements = trim($form_data['major_achievements']);
                    $achievements = htmlspecialchars($achievements);
                    $achievements = nl2br($achievements);
                    echo $achievements;
                } else {
                    echo 'N/A';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ================= PAGE 3 & 4 : CRITERIA ================= -->

<div class="criteria-page">

<?php
$criteria = $form_data['criteria_data'] ?? [];
// Set the character limit to 1400
$limit = 1400;
?>

<?php foreach ($criteria as $crit): ?>
    <div class="criteria-block">

        <div class="criteria-title"><?= $crit['name']; ?></div>

        <div class="criteria-text">
            <?php
            $desc = strip_tags($crit['description']);
            
            // Check if description exceeds the limit
            if (mb_strlen($desc, 'UTF-8') > $limit) {
                // Get exactly 1400 characters (not cutting at word boundary)
                $desc = mb_substr($desc, 0, $limit, 'UTF-8');
                // You can add ellipsis if you want, but it won't be part of the 1400 characters
                // $desc .= '...';
            }
            
            // Count characters for debugging (remove in production)
            $charCount = mb_strlen($desc, 'UTF-8');
            // echo "<!-- Character count: $charCount -->"; // Uncomment for debugging
            
            echo nl2br($desc);
            ?>
        </div>

        <?php if (!empty($crit['images'])): ?>
            <table>
                <tr>
                    <?php
                    $i = 0;
                    foreach ($crit['images'] as $img):
                        if ($i == 4) break;
                        if ($i > 0 && $i % 2 == 0) echo '</tr><tr>';
                    ?>
                        <td><img src="<?= FCPATH . $img; ?>"></td>
                    <?php $i++; endforeach; ?>
                </tr>
            </table>
        <?php endif; ?>

    </div>
<?php endforeach; ?>

</div>

</body>
</html>