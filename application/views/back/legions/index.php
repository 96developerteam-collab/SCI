<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legions</title>
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
        .btn-delete-legion {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            padding: 0.85rem 3.5rem;
            font-size: 1.30rem;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        #content-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 2rem 3rem;
            margin-top: 80px; 
            padding-top: 1rem; 
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
            font-size: 1.60rem;
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

        #btnAddLegion {
            font-size: 2rem;
            padding: 0.875rem 1.75rem;
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
            font-size: 1.95rem; 
            min-width: 1000px; 
        }

        thead {
            background: linear-gradient(135deg, #475569, #334155);
        }

        th {
            padding: 1.25rem 1rem;
            text-align: left;
            font-weight: 600;
            color: white;
            font-size: 1.875rem;
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

        td {
            padding: 1.25rem 1rem;
            vertical-align: middle;
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
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
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
        }

        .modal-overlay.show .modal-content {
            transform: scale(1);
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

        #modalCloseBtn, .modal-close-btn {
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

        #modalCloseBtn:hover, .modal-close-btn:hover {
            background: #e2e8f0;
            color: #475569;
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

        .prefix-badge {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 1.30rem;
            font-weight: 600;
            display: inline-block;
            min-width: 45px;
            text-align: center;
            text-transform: uppercase;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        tbody tr { animation: fadeIn 0.3s ease forwards; }

        .confirm-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header">Legions</h1>
            <button id="btnAddLegion">Add Legion</button>
        </div>
    </div>

    <div id="page-content">
        <!-- Success Alert -->
        <div class="alert alert-success" style="display: none;" id="successAlert">
            Action completed successfully!
        </div>
        
        <!-- Danger Alert -->
        <div class="alert alert-danger" style="display: none;" id="dangerAlert">
            Error occurred while processing your request.
        </div>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Legion Prefix</th>
                        <th>Legion Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="legionsTableBody">
                    <?php if (isset($legions) && !empty($legions)) : ?>
                        <?php foreach ($legions as $index => $legion) : ?>
                            <tr class="php-generated-row">
                                <td><?= $index + 1 ?></td>
                                <td><span class="prefix-badge"><?= htmlspecialchars($legion['prefix'] ?? '') ?></span></td>
                                <td><?= htmlspecialchars($legion['name']) ?></td>
                                <td>
                                    <button class="btn-delete-legion" 
                                        data-legion-id="<?= htmlspecialchars($legion['id']) ?>" 
                                        data-legion-name="<?= htmlspecialchars($legion['name']) ?>">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr><td colspan="4" style="text-align:center;"><em>No legions found.</em></td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Legion Modal -->
<div id="customModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add New Legion</h3>
            <button class="modal-close-btn" id="modalCloseBtn">✖</button>
        </div>
        <form id="addLegionForm" action="<?= site_url('admin/add_legion') ?>" method="POST">
            <label for="legionName">Legion Name:</label>
            <input type="text" id="legionName" name="legion_name" required placeholder="Enter legion name...">
            <label for="legionPrefix">Legion Prefix (Short Form):</label>
            <input type="text" id="legionPrefix" name="prefix" required 
                placeholder="e.g., NYC, LA, CHI..." 
                maxlength="10"
                style="text-transform: uppercase;">
            <button type="submit">Add Legion</button>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteConfirmModal" class="modal-overlay confirm-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Confirm Deletion</h3>
            <button class="modal-close-btn" id="deleteConfirmCloseBtn">✖</button>
        </div>
        <p id="deleteConfirmMessage">Are you sure you want to delete this legion?</p>
        <div class="confirm-buttons">
            <button class="btn-confirm" id="confirmDeleteBtn" style="background: linear-gradient(135deg, #ef4444, #b91c1c);">Delete</button>
            <button class="btn-cancel" id="cancelDeleteBtn" style="background: linear-gradient(135deg, #64748b, #475569);">Cancel</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('customModal');
        const modalCloseBtn = document.getElementById('modalCloseBtn');
        const form = document.getElementById('addLegionForm');
        const btnAddLegion = document.getElementById('btnAddLegion');

        const prefixInput = document.getElementById('legionPrefix');
        if (prefixInput) {
            prefixInput.addEventListener('input', function() {
                this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
            });
        }

        const deleteConfirmModal = document.getElementById('deleteConfirmModal');
        const deleteConfirmCloseBtn = document.getElementById('deleteConfirmCloseBtn');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
        const deleteConfirmMessage = document.getElementById('deleteConfirmMessage');

        const successAlert = document.getElementById('successAlert');
        const dangerAlert = document.getElementById('dangerAlert');

        let currentDeleteOperation = null;

        function showModal(modalElement) {
            modalElement.style.display = 'flex';
            setTimeout(() => modalElement.classList.add('show'), 10);
        }

        function hideModal(modalElement) {
            modalElement.classList.remove('show');
            setTimeout(() => modalElement.style.display = 'none', 300);
        }

        function showAlert(alertElement, message, duration = 3000) {
            alertElement.textContent = message;
            alertElement.style.display = 'block';
            setTimeout(() => {
                alertElement.style.display = 'none';
            }, duration);
        }

        function initDeleteLegionButtons() {
            const deleteLegionButtons = document.querySelectorAll('.btn-delete-legion');
            deleteLegionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const legionId = this.getAttribute('data-legion-id');
                    const legionName = this.getAttribute('data-legion-name');

                    currentDeleteOperation = {
                        id: legionId,
                        name: legionName,
                        element: this.closest('tr')
                    };

                    deleteConfirmMessage.textContent = `Are you sure you want to delete the legion "${legionName}"?`;
                    showModal(deleteConfirmModal);
                });
            });
        }

        initDeleteLegionButtons();

        modalCloseBtn.addEventListener('click', () => hideModal(modal));
        deleteConfirmCloseBtn.addEventListener('click', () => hideModal(deleteConfirmModal));
        cancelDeleteBtn.addEventListener('click', () => hideModal(deleteConfirmModal));

        btnAddLegion.addEventListener('click', function() {
            showModal(modal);
            setTimeout(() => {
                document.getElementById('legionName').focus();
            }, 400);
        });

        [modal, deleteConfirmModal].forEach(modalElement => {
            modalElement.addEventListener('click', function(e) {
                if (e.target === modalElement) {
                    hideModal(modalElement);
                }
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (modal.classList.contains('show')) hideModal(modal);
                if (deleteConfirmModal.classList.contains('show')) hideModal(deleteConfirmModal);
            }
        });

        confirmDeleteBtn.addEventListener('click', function() {
            if (!currentDeleteOperation) return;

            const operation = currentDeleteOperation;
            
            fetch(`<?= site_url('admin/delete_legion') ?>`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ legion_id: operation.id })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    operation.element.style.animation = 'fadeOut 0.3s ease forwards';
                    setTimeout(() => {
                        operation.element.remove();
                        updateRowNumbers();
                    }, 300);
                    showAlert(successAlert, `Legion "${operation.name}" deleted successfully!`);
                } else {
                    showAlert(dangerAlert, `Error deleting legion: ${data.message}`);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert(dangerAlert, `Error deleting legion: ${error.message}`);
            });

            hideModal(deleteConfirmModal);
            currentDeleteOperation = null;
        });

        function updateRowNumbers() {
            const rows = document.querySelectorAll('#legionsTableBody tr');
            if(rows.length === 0) {
                document.getElementById('legionsTableBody').innerHTML = '<tr><td colspan="4" style="text-align:center;"><em>No legions found.</em></td></tr>';
            } else {
                rows.forEach((row, index) => {
                    const numberCell = row.querySelector('td:first-child');
                    if (numberCell) {
                        numberCell.textContent = index + 1;
                    }
                });
            }
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert(successAlert, `Legion "${data.legion_name}" (${data.prefix || ''}) added successfully!`);
                    addNewLegionToTable(data.legion_id, data.legion_name, data.prefix);
                    form.reset();
                    hideModal(modal);
                } else {
                    showAlert(dangerAlert, 'Error adding legion: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert(dangerAlert, 'An error occurred while adding legion.');
            });
        });

        function addNewLegionToTable(legionId, legionName, prefix) {
            const tbody = document.getElementById('legionsTableBody');
            
            if(tbody.querySelector('td[colspan]')) {
                tbody.innerHTML = '';
            }
            
            const rowCount = tbody.children.length + 1;
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowCount}</td>
                <td><span class="prefix-badge">${prefix || ''}</span></td>
                <td>${legionName}</td>
                <td>
                    <button class="btn-delete-legion" 
                        data-legion-id="${legionId}" 
                        data-legion-name="${legionName}">
                        Delete
                    </button>
                </td>
            `;
            
            tbody.appendChild(newRow);
            initDeleteLegionButtons();
        }

        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeOut {
                from { opacity: 1; transform: translateX(0); }
                to { opacity: 0; transform: translateX(-20px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>

</body>
</html>