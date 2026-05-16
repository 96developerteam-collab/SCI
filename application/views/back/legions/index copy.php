<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas and Legions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        #content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            /* Add top margin to avoid header overlap */
            margin-top: 80px; /* Adjust this value based on your admin header height */
            padding-top: 1rem; /* Reduced top padding since we have margin-top */
        }

        #page-head {
            margin-bottom: 2rem;
        }

        #page-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .page-header {
            font-size: 2.25rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }

        /* Button Styles */
        button {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            transform: translateY(-1px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.2);
        }

        button:active {
            transform: translateY(0);
        }

        #btnAddArea {
            font-size: 1rem;
            padding: 0.875rem 1.75rem;
        }

        .btn-add-legion {
            background: linear-gradient(135deg, #10b981, #059669);
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
        }

        .btn-add-legion:hover {
            background: linear-gradient(135deg, #059669, #047857);
        }

        /* Alert Styles */
        .alert {
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .alert-success {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            color: #065f46;
            border-left: 4px solid #10b981;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            color: #991b1b;
            border-left: 4px solid #ef4444;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        thead {
            background: linear-gradient(135deg, #475569, #334155);
        }

        th {
            padding: 1.25rem 1rem;
            text-align: left;
            font-weight: 600;
            color: white;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tbody tr {
            border-bottom: 1px solid #e2e8f0;
            transition: background-color 0.2s ease;
        }

        tbody tr:hover {
            background-color: #f8fafc;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        td {
            padding: 1.25rem 1rem;
            vertical-align: top;
        }

        td:first-child {
            font-weight: 600;
            color: #64748b;
        }

        td:nth-child(2) {
            font-weight: 600;
            color: #1e293b;
        }

        /* Legion List Styles */
        ul {
            margin: 0;
            padding-left: 1.25rem;
            list-style-type: none;
        }

        li {
            position: relative;
            padding: 0.25rem 0;
            color: #475569;
        }

        li:before {
            content: "•";
            color: #3b82f6;
            font-weight: bold;
            position: absolute;
            left: -1rem;
        }

        em {
            color: #94a3b8;
            font-style: italic;
        }

        .no-areas {
            text-align: center;
            padding: 3rem;
            color: #64748b;
            font-size: 1.125rem;
        }

        /* Ensure modals appear above admin elements */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(4px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999; /* High z-index to appear above admin elements */
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            /* Additional centering fallbacks */
            -webkit-box-align: center;
            -webkit-box-pack: center;
            -ms-flex-align: center;
            -ms-flex-pack: center;
        }

        .modal-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            width: 90%;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: scale(0.95);
            transition: transform 0.3s ease;
            position: relative;
            /* Additional centering styles */
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0.95);
            margin: 0;
        }

        .modal-overlay.show .modal-content {
            transform: translate(-50%, -50%) scale(1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }

        #modalCloseBtn {
            background: #f1f5f9;
            color: #64748b;
            border: none;
            border-radius: 8px;
            width: 2.5rem;
            height: 2.5rem;
            font-size: 1.25rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            padding: 0;
        }

        #modalCloseBtn:hover {
            background: #e2e8f0;
            color: #475569;
            transform: none;
            box-shadow: none;
        }

        /* Form Styles */
        form {
            margin-top: 0;
        }

        label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.875rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.2s ease;
            margin-bottom: 1.5rem;
            background: #f8fafc;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #3b82f6;
            background: white;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        form button[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            font-size: 1rem;
            padding: 0.875rem;
            margin-top: 0.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #content-container {
                padding: 1rem;
                margin-top: 70px; /* Adjust for mobile admin header */
                padding-top: 0.5rem;
            }

            .page-header {
                font-size: 1.875rem;
            }

            #page-title {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            table {
                font-size: 0.875rem;
            }

            th, td {
                padding: 0.75rem 0.5rem;
            }

            th:first-child, td:first-child {
                display: none;
            }
        }

        @media (max-width: 480px) {
            #content-container {
                margin-top: 60px; /* Further adjust for smaller mobile screens */
            }

            .modal-content {
                width: 95%;
                max-width: 350px;
                padding: 1.5rem;
                /* Keep the centering on mobile */
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%) scale(0.95);
            }

            .modal-overlay.show .modal-content {
                transform: translate(-50%, -50%) scale(1);
            }

            th:nth-child(4), td:nth-child(4) {
                width: 1px;
                white-space: nowrap;
            }
        }

        /* Admin Panel Integration Styles */
        /* If your admin panel has a fixed sidebar, uncomment and adjust the following */
        /*
        #content-container {
            margin-left: 250px; /* Adjust based on your sidebar width */
        }
        
        @media (max-width: 768px) {
            #content-container {
                margin-left: 0; /* Remove sidebar margin on mobile */
            }
        }
        */

        /* Additional utility classes for admin integration */
        .admin-content {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Ensure modals appear above admin elements */
        .modal-overlay {
            z-index: 9999; /* High z-index to appear above admin elements */
        }

        /* Loading Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        tbody tr {
            animation: fadeIn 0.3s ease forwards;
        }

        tbody tr:nth-child(even) {
            animation-delay: 0.1s;
        }

        tbody tr:nth-child(odd) {
            animation-delay: 0.05s;
        }
    </style>
</head>
<body>

<!--CONTENT CONTAINER-->
<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header">Areas and their Legions</h1>
            <button id="btnAddArea">Add Area</button>
        </div>
    </div>

    <div id="page-content">
        <!-- Success Alert Example -->
        <div class="alert alert-success" style="display: none;" id="successAlert">
            Area added successfully!
        </div>
        
        <!-- Danger Alert Example -->
        <div class="alert alert-danger" style="display: none;" id="dangerAlert">
            Error occurred while processing your request.
        </div>

        <div>
            <!-- Sample data for demonstration -->
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Area Name</th>
                        <th>Legions</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach ($areas as $index => $area) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($area['name']) ?></td>
                                <td>
                                    <?php if (!empty($area['legions'])) : ?>
                                        <ul style="margin:0; padding-left:20px;">
                                            <?php foreach ($area['legions'] as $legion) : ?>
                                                <li><?= htmlspecialchars($legion['name']) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else : ?>
                                        <em>No legions assigned.</em>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button class="btn-add-legion" 
                                        data-area-id="<?= htmlspecialchars($area['id']) ?>" 
                                        data-area-name="<?= htmlspecialchars($area['name']) ?>"
                                        style="cursor:pointer; padding:5px 10px;">
                                        + Add Legion
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Legion Modal -->
<div id="customModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add Legion to <span id="modalAreaName">Area</span></h3>
            <button id="modalCloseBtn">✖</button>
        </div>
        <form id="addLegionForm" action="<?= site_url('admin/add_legion') ?>" method="POST">

            <input type="hidden" name="area_id" id="modalAreaId" value="">
            <label for="legionName">Legion Name:</label>
            <input type="text" id="legionName" name="legion_name" required placeholder="Enter legion name...">
            <button type="submit">Add Legion</button>
        </form>
    </div>
</div>

<!-- Add Area Modal -->
<div id="addAreaModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add New Area</h3> 
            <button id="addAreaModalCloseBtn">✖</button>
        </div>
        <form id="addAreaForm"  action="<?= site_url('admin/add_area') ?>"method="POST">
            <label for="areaName">Area Name:</label>
            <input type="text" id="areaName" name="area_name" required placeholder="Enter area name...">
            <button type="submit">Add Area</button>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('customModal');
        const modalAreaName = document.getElementById('modalAreaName');
        const modalAreaId = document.getElementById('modalAreaId');
        const modalCloseBtn = document.getElementById('modalCloseBtn');
        const addLegionButtons = document.querySelectorAll('.btn-add-legion');
        const form = document.getElementById('addLegionForm');

        // Add Area Modal Elements
        const addAreaModal = document.getElementById('addAreaModal');
        const addAreaModalCloseBtn = document.getElementById('addAreaModalCloseBtn');
        const addAreaForm = document.getElementById('addAreaForm');
        const btnAddArea = document.getElementById('btnAddArea');

        // Add smooth modal animations
        function showModal(modalElement) {
            modalElement.style.display = 'flex';
            setTimeout(() => modalElement.classList.add('show'), 10);
        }

        function hideModal(modalElement) {
            modalElement.classList.remove('show');
            setTimeout(() => modalElement.style.display = 'none', 300);
        }

        // Add Legion Modal functionality
        addLegionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const areaId = this.getAttribute('data-area-id');
                const areaName = this.getAttribute('data-area-name');

                modalAreaName.textContent = areaName || 'Unknown Area';
                modalAreaId.value = areaId || '';

                showModal(modal);
                
                // Focus on input field
                setTimeout(() => {
                    document.getElementById('legionName').focus();
                }, 400);
            });
        });

        modalCloseBtn.addEventListener('click', () => hideModal(modal));

        // Add Area Modal functionality
        btnAddArea.addEventListener('click', function() {
            showModal(addAreaModal);
            
            // Focus on input field
            setTimeout(() => {
                document.getElementById('areaName').focus();
            }, 400);
        });

        addAreaModalCloseBtn.addEventListener('click', () => hideModal(addAreaModal));

        // Close modals if click outside content
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                hideModal(modal);
            }
        });

        addAreaModal.addEventListener('click', function(e) {
            if (e.target === addAreaModal) {
                hideModal(addAreaModal);
            }
        });

        // Close modals on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (modal.classList.contains('show')) {
                    hideModal(modal);
                }
                if (addAreaModal.classList.contains('show')) {
                    hideModal(addAreaModal);
                }
            }
        });


form.addEventListener('submit', function(e) {
    e.preventDefault(); // stop normal form submit
    
    const formData = new FormData(form); // collects form inputs
    
    fetch(form.action, {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())  // expecting JSON response
    .then(data => {
        if (data.success) {
            // Show success message
            const successAlert = document.getElementById('successAlert');
            successAlert.textContent = `Legion "${data.legion_name}" added successfully!`;
            successAlert.style.display = 'block';

            // Optionally update UI here (e.g., add new legion to a list)

            form.reset();
            // Hide modal if you want
            hideModal(document.getElementById('customModal'));
            
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 3000);
        } else {
            alert('Error adding legion: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while adding legion.');
    });
});

        // Add Area Form submission

        addAreaForm.addEventListener('submit', function(e) {
            e.preventDefault(); // stop normal form submit
            
            const formData = new FormData(addAreaForm); // collects form inputs
            
            fetch(addAreaForm.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())  // expecting JSON response
            .then(data => {
                if (data.success) {
                    // Show success message
                    const successAlert = document.getElementById('successAlert');
                    successAlert.textContent = `Area "${data.area_name}" added successfully!`;
                    successAlert.style.display = 'block';

                    // Optionally update UI here (e.g., add new area to a table)
                    addNewAreaToTable(data.area_name, data.area_id);

                    addAreaForm.reset();
                    // Hide modal if you want
                    hideModal(document.getElementById('addAreaModal'));
                    
                    setTimeout(() => {
                        successAlert.style.display = 'none';
                    }, 3000);
                } else {
                    alert('Error adding area: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while adding area.');
            });
        });


        // Function to add new area to table (demo functionality)
        function addNewAreaToTable(areaName) {
            const tbody = document.querySelector('tbody');
            const rowCount = tbody.children.length + 1;
            const newAreaId = Date.now(); // Simple ID generation for demo
            
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowCount}</td>
                <td>${areaName}</td>
                <td><em>No legions assigned.</em></td>
                <td>
                    <button class="btn-add-legion" 
                        data-area-id="${newAreaId}" 
                        data-area-name="${areaName}">
                        + Add Legion
                    </button>
                </td>
            `;
            
            tbody.appendChild(newRow);
            
            // Add event listener to the new button
            const newButton = newRow.querySelector('.btn-add-legion');
            newButton.addEventListener('click', function() {
                const areaId = this.getAttribute('data-area-id');
                const areaName = this.getAttribute('data-area-name');

                modalAreaName.textContent = areaName || 'Unknown Area';
                modalAreaId.value = areaId || '';

                showModal(modal);
                
                setTimeout(() => {
                    document.getElementById('legionName').focus();
                }, 400);
            });
        }
    });
</script>

</body>
</html>