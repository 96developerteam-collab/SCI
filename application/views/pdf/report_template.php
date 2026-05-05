<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 0;
            border: 3px solid #3d7ffac6;
            box-sizing: border-box;
        }
         
        .page-break {
            page-break-after: always;
        }

        .title-page {
            text-align: center;
            margin-top: 200px;
            padding: 15mm;
        }

        .title-page .report-title {
            margin-top: 60px;    
        }

        .report-logo {
            max-width: 650px;
            height: auto;
            margin-bottom: 10px;
        }

        .company-logo {
            max-width: 150px;
            margin-bottom: 40px;
        }

        .report-heading { 
            margin-top: 20px;
            padding-top: 10px;
            text-align: center;
            margin-bottom: 15px;
            color: #3d7ffac6;
            font-size: 24px;
            padding: 0 15mm;
        }

        .report-dates {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            padding: 0 15mm;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 15px 15px 15px;
            word-wrap: break-word;
            word-break: break-word;
        }

        th, td {
            border: 1px solid #333;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #3d7ffac6;
            color: white;
        }

        .col-slno {
            width: 20px !important;
            min-width: 20px;
            max-width: 20px;
            padding: 0 2px !important;
            text-align: center;
        }
        .col-date {
            width: 20px !important;
            min-width: 20px;
            max-width: 20px;
            padding: 8px !important;
            text-align: left;
        }

        .col-program, .col-program-area {
            width: 30px !important;
            min-width: 30px;
            max-width: 30px;
            padding: 8px !important;
            text-align: left;
        }

        .col-details {
            width: 100px !important;
            min-width: 100px;
            max-width: 100px;
            padding: 8px !important;
            text-align: left;
        }

        .detail-table {
            border: 2px solid #3d7ffac6;
            width: 100% !important;
            table-layout: fixed !important;
            word-wrap: break-word !important;
            word-break: break-word !important;
        }

        .detail-table th, .detail-table td {
            border: 1px solid #3d7ffac6;
            padding: 8px;
            vertical-align: top !important;
            box-sizing: border-box !important;
        }

        .detail-table th {
            background-color: #3d7ffac6;
            color: white;
        }

        .image-row td {
            text-align: center;
            border: 1px solid #3d7ffac6;
            padding: 4px;
        }

        .image-row img {
            max-width: 100% !important;
            max-height: 200px !important;
            margin: 0 !important;
            border: 1px solid #ccc !important;
            height: auto !important;
        }

        .wrap-text {
            white-space: normal;
        }
        .report-company {
            font-size: 40px; 
        }
        .legion-info {
            padding-top: 140px;
        }
        .legion-info1 {
            padding-top: 180px;
        }
        .legion-info2 {
            padding-top: 220px;
        }

        .page-container {
            min-height: 842px; /* A4 height at 72dpi */
            box-sizing: border-box;
            padding-bottom: 80px; /* Space for footer */
            position: relative;
            margin-bottom: 40px;
        }

        .footer-contact {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 20px 40px;
            font-size: 12px;
            color: #333;
            line-height: 1.8;
            background-color: #f9f9f9;
            border-top: 2px solid #3d7ffac6;
            box-sizing: border-box;
            z-index: 10;
        }

        .footer-contact .contact-address {
            font-weight: normal;
            font-size: 13px;
            margin: 0 0 10px 0;
            line-height: 1.5;
        }
        .footer-contact .border {
            border-top: 2px solid #3d7ffac6;
            margin: 5px 0 10px;
        }
        .footer-contact .contact-title {
            color: #3d7ffac6;
            font-size: 16px;
            padding: 10px 0;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .footer-contact .contact-details p {
            margin: 10px 0 8px 0;
            padding: 0;
            display: block;
            text-align: left;
        }
        .footer-contact .contact-details p strong {
            display: block;
            margin-top: 0;
            margin-bottom: 3px;
            font-weight: bold;
            font-size: 14px;
            color: #3d7ffac6;
        }
        .footer-contact .social-media {
            list-style: none;
            padding: 0;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .footer-contact .social-media li a {
            color: #3d7ffac6;
            text-decoration: none;
            font-size: 14px;
        }
        .footer-contact .social-media li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
    $home_contact_info_text = $this->db->get_where('frontend_settings', array('type' => 'home_contact_info_text'))->row()->value;
    $home_contact_phone = $this->db->get_where('general_settings', array('type' => 'phone'))->row()->value;
    $home_contact_address = $this->db->get_where('general_settings', array('type' => 'address'))->row()->value;
    $system_email = $this->db->get_where('general_settings', array('type' => 'email'))->row()->value;
    $social_links = $this->db->get('social_links')->result();
?>

<div class="title-page">
    <img src="file://<?= FCPATH . 'uploads/logo1.jpg' ?>" class="report-logo" alt="Company Logo" />
    <h1 class="report-title"><?= htmlspecialchars($title) ?></h1>
    <h1 class="report-company"><?= htmlspecialchars($company) ?></h1>
    <h1 class="legion-info">Name: <?= htmlspecialchars($member_name ?? 'N/A') ?></h1>
    <h1 class="legion-info1">Legion: <?= htmlspecialchars($legion_name ?? 'N/A') ?></h1>
    <h1 class="legion-info2">Area: <?= htmlspecialchars($area_name ?? 'N/A') ?></h1>
</div>

<?php if (!empty($report_data)): ?>
    <div class="page-break"></div>

    <!-- Page 2: Summary Table -->
    <div class="page-container">
        <h2 class="report-heading">Report List</h2>
        <table>
            <thead>
                <tr>
                    <th class="col-slno">Sl. No</th>
                    <th class="col-date">Date</th>
                    <th class="col-program">Program</th>
                    <th class="col-program-area">Program Area</th>
                    <th class="col-details">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($report_data as $i => $row): ?>
                    <tr>
                        <td class="col-slno"><?= $i + 1 ?></td>
                        <!--<td class="col-date"><?= htmlspecialchars($row->program_date) ?></td>-->
                        <td class="col-date"><?= htmlspecialchars((new DateTime($row->program_date))->format('d/m/Y'))?></td>
                        <td class="col-program"><?= htmlspecialchars($row->title) ?></td>
                        <td class="col-program-area"><?= htmlspecialchars($row->program_area) ?></td>
                        <td class="col-details"><?= htmlspecialchars($row->description) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="footer-contact">
            <div class="contact-title">Contact Information</div>
            <div class="border"></div>
            <div class="contact-details" style="text-align: left;">
                <p><strong>MAIL: </strong>            scins2122@gmail.com</p><br>
                <p><strong>CONTACT: </strong>                     +91 97452 21380</p><br>
                <p><strong>ADDRESS: </strong>                     GF 20 , VYAPARABHAVAN CALICUT,KERALA- 673 001</p>
            </div>
        </div>
    </div>

    <!-- Detailed Pages -->
    <?php
    $report_count = count($report_data);
    foreach ($report_data as $i => $report):
        $sl_no = $i + 1; // Ensure ascending order starting from 1
    ?>
        <div class="page-break"></div>
        <div class="page-container">
            <table class="detail-table">
                <tr>
                    <th colspan="2">Sl. No: <?= $sl_no ?> — Project Name: <?= htmlspecialchars($report->title) ?></th>
                </tr>
                <tr>
                    <td><strong>Area Name:</strong> <?= htmlspecialchars($report->area_name) ?></td>
                    <td><strong>Legion Name:</strong> <?= htmlspecialchars($report->legion_name) ?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>President Name:</strong> <?= htmlspecialchars($report->member_name ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>President Area:</strong> <?= htmlspecialchars($report->program_area ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="wrap-text"><strong>Description:</strong> <?= htmlspecialchars($report->description) ?></td>
                </tr>
                <tr class="image-row">
                    <td style="padding: 4px; text-align: center; border: 1px solid #3d7ffac6;">
                        <div style="font-weight: bold; font-size: 14px; margin-bottom: 6px;">Active Image</div>
                        <img src="<?= 'uploads/happy_story_image/' . $report->activity_photo ?>" alt="Active Image" style="max-width: 100%; max-height: 200px; height: auto; margin: 0; border: 1px solid #ccc;">
                    </td>
                    <td style="padding: 4px; text-align: center; border: 1px solid #3d7ffac6;">
                        <div style="font-weight: bold; font-size: 14px; margin-bottom: 6px;">Press Coverage Image</div>
                        <img src="<?= 'uploads/happy_story_image/' . ($report->press_coverage ?? 'company_logo.jpg') ?>" alt="Press Image" style="max-width: 100%; max-height: 200px; height: auto; margin: 0; border: 1px solid #ccc;">
                    </td>
                </tr>
            </table>
            <div class="footer-contact">
                <div class="contact-title">Contact Information</div>
                <div class="border"></div>
                <div class="contact-details" style="text-align: left;">
                    <p><strong>MAIL: </strong>            scins2122@gmail.com</p><br>
                    <p><strong>CONTACT: </strong>                     +91 97452 21380</p><br>
                    <p><strong>ADDRESS: </strong>                      GF 20 , VYAPARABHAVAN CALICUT,KERALA- 673 001</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>