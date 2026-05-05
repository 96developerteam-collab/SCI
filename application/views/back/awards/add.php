<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow">Add Award Entry</h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><?= translate('home')?></a></li>
            <li><a href="#">Awards</a></li>
            <li class="active">Add New</li>
        </ol>
    </div>
    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-trophy"></i> Add Award Entry</h3>
            </div>

            <div class="panel-body">

                <?php if (isset($success_alert)): ?>
                    <div class="alert alert-success" id="success_alert"><?= $success_alert; ?></div>
                <?php endif; ?>

                <?php if (isset($danger_alert)): ?>
                    <div class="alert alert-danger" id="danger_alert"><?= $danger_alert; ?></div>
                <?php endif; ?>

<script>
    setTimeout(function() {
        $('#success_alert').fadeOut('fast');
        $('#danger_alert').fadeOut('fast');
    }, 5000); 
</script>

                <form class="form-horizontal" method="post" action="<?= base_url('admin/award/do_add'); ?>" id="award-form" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-3 control-label">Year</label>
                <div class="col-sm-6">
                    <input type="number" name="year" value="<?= date('Y'); ?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Award For</label>
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="radio" name="award_for" value="legion" checked onclick="toggleAwardType()"> Group (Legion)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="award_for" value="individual" onclick="toggleAwardType()"> Individual
                    </label>
                </div>
            </div>

            <!-- Legion section -->
            <div id="legion-section">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Award Category</label>
                    <div class="col-sm-6">
                        <select name="category" id="legion-category" class="form-control" required>
                            <option value="">Choose Legion Award</option>
                        </select>
                    </div>
                </div>

                <!-- New Project Fields -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Bidding Date</label>
                    <div class="col-sm-3">
                        <input type="date" name="form_project_date" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Area</label>
                    <div class="col-sm-6">
                        <select name="area_id" id="area_id" class="form-control" onchange="loadLegions()" required>
                            <option value="">Choose Area</option>
                            <?php foreach ($areas as $area): ?>
                                <option value="<?= $area['id']; ?>"><?= $area['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Legion</label>
                    <div class="col-sm-6">
                        <select name="legion_id" id="legion_id" class="form-control" onchange="setLegionName()" required>
                            <option value="">Choose Legion</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Legion Name (Display)</label>
                    <div class="col-sm-6">
                        <input type="text" name="legion_name" id="legion_name" class="form-control" readonly>
                    </div>
                </div>

                <!-- Award manual fields for Legion entry form -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name of the Award (printed)</label>
                    <div class="col-sm-6">
                        <input type="text" name="form_award_name" class="form-control"
                               placeholder="As to be printed on certificate (if applicable)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Legion President Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="form_president_name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address of Legion</label>
                    <div class="col-sm-6">
                        <textarea name="form_legion_address" class="form-control" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Total Membership Strength</label>
                    <div class="col-sm-3">
                        <input type="number" name="form_members_count" class="form-control" min="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Date of Affiliation</label>
                    <div class="col-sm-3">
                        <input type="date" name="form_affiliation_date" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Description / Major Achievements</label>
                    <div class="col-sm-6">
                        <textarea name="form_major_achievements_legion" class="form-control" rows="5" placeholder="Describe the activities, impact, and results..." required></textarea>
                    </div>
                </div>

                <!-- Dynamic Criteria Section -->
                <div id="legion-criteria-container"></div>


            </div>

            <!-- Individual section -->
            <div id="individual-section" style="display:none;">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Award Category</label>
                    <div class="col-sm-6">
                        <select name="category" id="individual-category" class="form-control" required>
                            <option value="">Choose Individual Award</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Area</label>
                    <div class="col-sm-6">
                        <select name="area_id" id="ind_area_id" class="form-control" onchange="loadIndLegions()" required>
                            <option value="">Choose Area</option>
                            <?php foreach ($areas as $area): ?>
                                <option value="<?= $area['id']; ?>"><?= $area['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Legion</label>
                    <div class="col-sm-6">
                        <select name="legion_id" id="ind_legion_id" class="form-control" onchange="setIndLegionName()" required>
                            <option value="">Choose Legion</option>
                        </select>
                    </div>
                </div>

                <!-- REMOVED MEMBER DROPDOWN SECTION -->
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name of Nominee</label>
                    <div class="col-sm-6">
                        <input type="text" name="nominee_name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Proposed By (Name)</label>
                    <div class="col-sm-6">
                        <input type="text" name="form_proposed_by" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Legion Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="legion_name_individual" id="legion_name_individual" class="form-control" readonly required>
                    </div>
                </div>

                <!-- Individual Details Fields -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Year of Charter</label>
                    <div class="col-sm-3">
                        <input type="text" name="form_year_of_charter" class="form-control" required>
                    </div>
                    <label class="col-sm-1 control-label">Member Since</label>
                    <div class="col-sm-2">
                        <input type="text" name="form_member_since" class="form-control" placeholder="Year" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Mailing Address</label>
                    <div class="col-sm-6">
                        <textarea name="form_mailing_address" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-2">
                        <input type="number" name="form_age" class="form-control" min="0">
                    </div>
                    <label class="col-sm-2 control-label">Sex</label>
                    <div class="col-sm-2">
                        <select name="form_sex" class="form-control">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Qualifications</label>
                    <div class="col-sm-6">
                        <textarea name="form_qualifications" class="form-control" rows="2"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Vocation</label>
                    <div class="col-sm-6">
                        <input type="text" name="form_vocation" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Marital Status</label>
                    <div class="col-sm-3">
                        <select name="form_marital_status" class="form-control">
                            <option value="">Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Spouse Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="form_spouse_name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Children Names</label>
                    <div class="col-sm-6">
                        <textarea name="form_children_names" class="form-control" rows="2" placeholder="Names of children (if any)"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Date of Award Bidding</label>
                    <div class="col-sm-3">
                        <input type="date" name="form_legion_award_date" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-6">
                        <input type="file" name="individual_photo" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Supporting Document</label>
                    <div class="col-sm-6">
                        <input type="file" name="individual_support_doc" class="form-control" accept=".pdf,.doc,.docx">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Bio / Citation (Short)</label>
                    <div class="col-sm-6">
                        <textarea name="form_bio" class="form-control" rows="3" placeholder="Short bio for emcee to read if awarded (approx 100 words)" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Description of Achievements</label>
                    <div class="col-sm-6">
                        <textarea name="form_major_achievements" class="form-control" rows="5" placeholder="Detailed list of achievements justifying this nomination" required></textarea>
                    </div>
                </div>

                <!-- Dynamic Criteria Section -->
                <div id="individual-criteria-container"></div>

            </div>

            <hr>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block">
                        Save Award Entry
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>

<style>
.is-invalid {
    border-color: #f44336 !important;
    background-color: #ffebee;
}

.character-count .current-count.exceeded {
    color: #f44336;
    font-weight: bold;
}

.character-count.warning {
    color: #ff9800;
}

.character-count.exceeded {
    color: #f44336;
}

.criteria-group {
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.criteria-group:last-child {
    border-bottom: none;
}
</style>

<script>
var awardDetailMap = <?= json_encode($award_criteria); ?>;

function populateAwardCategories() {
    var legionSelect = $('#legion-category');
    var indSelect = $('#individual-category');
    
    // Clear and keep default
    legionSelect.find('option:gt(0)').remove();
    indSelect.find('option:gt(0)').remove();

    // Populate from Dynamic Map
    if (awardDetailMap.legion) {
        $.each(Object.keys(awardDetailMap.legion), function(i, val) {
            legionSelect.append($('<option>', { value: val, text: val }));
        });
    }
    if (awardDetailMap.individual) {
        $.each(Object.keys(awardDetailMap.individual), function(i, val) {
            indSelect.append($('<option>', { value: val, text: val }));
        });
    }
}

// Logic to render criteria fields
function renderCriteria(type, category) {
    var container = (type === 'legion') ? $('#legion-criteria-container') : $('#individual-criteria-container');
    container.empty();

    if (!category || !awardDetailMap[type] || !awardDetailMap[type][category]) {
        return;
    }

    var criteriaList = awardDetailMap[type][category];
    
    container.append('<h4>Category Criteria Requirements</h4><hr>');

    var i = 0;
    $.each(criteriaList, function(criteriaName, points) {
        var html = `
            <div class="form-group criteria-group">
                <label class="col-sm-3 control-label">${criteriaName} <br><small class="text-muted">(Max ${points} pts)</small></label>
                <div class="col-sm-6">
                    <input type="hidden" name="criteria[${i}][name]" value="${criteriaName}">
                    <input type="hidden" name="criteria[${i}][max_points]" value="${points}">
                    
                    <textarea name="criteria[${i}][desc]" class="form-control criteria-desc" rows="4" 
                        placeholder="Description and justification for ${criteriaName} (Maximum 1400 characters)" 
                        maxlength="1400" required></textarea>
                    
                    <div class="character-count" style="margin-top: 5px; font-size: 12px;">
                        Characters: <span class="current-count">0</span> / 1400
                    </div>
                    
                    <div style="margin-top: 10px;">
                        <label>Upload Evidence (2 Images):</label>
                        <input type="file" name="criteria_files_${i}[]" multiple accept="image/*" class="form-control">
                        <span class="help-block">Please upload exactly 2 images proving this criterion.</span>
                    </div>
                </div>
            </div>
        `;
        container.append(html);
        i++;
    });
    
    // Add character count functionality
    container.find('.criteria-desc').on('input', function() {
        var count = $(this).val().length;
        var countSpan = $(this).next('.character-count').find('.current-count');
        var countContainer = $(this).next('.character-count');
        
        countSpan.text(count);
        
        // Remove all classes first
        countContainer.removeClass('warning exceeded');
        
        // Change styling based on character count
        if (count > 1400) {
            countContainer.addClass('exceeded');
            countSpan.css('color', '#f44336');
            $(this).addClass('is-invalid');
        } else if (count > 1200) {
            countContainer.addClass('warning');
            countSpan.css('color', '#ff9800');
            $(this).removeClass('is-invalid');
        } else {
            countSpan.css('color', '#666');
            $(this).removeClass('is-invalid');
        }
    });
    
    // Trigger input event to initialize counts
    container.find('.criteria-desc').trigger('input');
}

// Event Listeners for render
$('#legion-category').change(function() {
    renderCriteria('legion', $(this).val());
});

$('#individual-category').change(function() {
    renderCriteria('individual', $(this).val());
});

function toggleAwardType() {
    var val = $('input[name="award_for"]:checked').val();
    if (val === 'legion') {
        $('#legion-section').show();
        $('#individual-section').hide();
        
        // Disable individual fields so they aren't validated
        $('#individual-section').find('input, select, textarea').prop('disabled', true);
        $('#legion-section').find('input, select, textarea').prop('disabled', false);

        $('#legion-category').attr('required', true);
        $('#individual-category').removeAttr('required');
        
        // Clear individual fields to prevent validation issues
        $('#individual-section').find('input, select, textarea').val('');

    } else {
        $('#legion-section').hide();
        $('#individual-section').show();
        
        // Disable legion fields
        $('#legion-section').find('input, select, textarea').prop('disabled', true);
        $('#individual-section').find('input, select, textarea').prop('disabled', false);

        $('#individual-category').attr('required', true);
        $('#legion-category').removeAttr('required');
        
        // Clear legion fields to prevent validation issues
        $('#legion-section').find('input, select, textarea').val('');
    }
}

function loadLegions() {
    var areaId = $('#area_id').val();
    if (!areaId) {
        $('#legion_id').html('<option value="">Choose Legion</option>');
        return;
    }
    $.get('<?= base_url('admin/get_legions_of_area'); ?>/' + areaId, function(res) {
        var html = '<option value="">Choose Legion</option>';
        try {
            var legions = JSON.parse(res);
            for (var i=0; i<legions.length; i++) {
                html += '<option value="'+legions[i].id+'" data-name="'+legions[i].name+'">'+legions[i].name+' ('+(legions[i].prefix || '')+')</option>';
            }
        } catch(e) {}
        $('#legion_id').html(html);
    });
}

function setLegionName() {
    var name = $('#legion_id option:selected').data('name') || '';
    $('#legion_name').val(name);
}

function loadIndLegions() {
    var areaId = $('#ind_area_id').val();
    if (!areaId) {
        $('#ind_legion_id').html('<option value="">Choose Legion</option>');
        return;
    }
    $.get('<?= base_url('admin/get_legions_of_area'); ?>/' + areaId, function(res) {
        var html = '<option value="">Choose Legion</option>';
        try {
            var legions = JSON.parse(res);
            for (var i=0; i<legions.length; i++) {
                html += '<option value="'+legions[i].id+'" data-name="'+legions[i].name+'">'+legions[i].name+' ('+(legions[i].prefix || '')+')</option>';
            }
        } catch(e) {}
        $('#ind_legion_id').html(html);
    });
}

function setIndLegionName() {
    var name = $('#ind_legion_id option:selected').data('name') || '';
    $('#legion_name_individual').val(name);
}

$(document).ready(function() {
    populateAwardCategories();
    toggleAwardType();
    
    // Initialize form validation
    $('#award-form').validate({
        rules: {
            year: {
                required: true,
                min: 2000,
                max: 2050
            },
            'area_id': {
                required: true
            },
            'legion_id': {
                required: true
            }
        },
        messages: {
            year: {
                required: "Please enter year",
                min: "Please enter a valid year",
                max: "Please enter a valid year"
            },
            'area_id': {
                required: "Please select area"
            },
            'legion_id': {
                required: "Please select legion"
            }
        },
        // Custom validation for criteria descriptions
        submitHandler: function(form) {
            // Validate character count for all criteria descriptions
            var isValid = true;
            var errorMessages = [];
            var firstErrorField = null;
            
            $('.criteria-desc').each(function(index) {
                var text = $(this).val();
                var count = text.length;
                var criteriaName = $(this).closest('.criteria-group').find('.control-label').text().split('\n')[0].trim();
                
                if (count > 1400) {
                    isValid = false;
                    errorMessages.push(`"${criteriaName}" description exceeds 1400 characters (${count} characters)`);
                    
                    // Store the first error field for scrolling
                    if (!firstErrorField) {
                        firstErrorField = $(this);
                    }
                    
                    // Highlight the problematic field
                    $(this).addClass('is-invalid');
                    $(this).next('.character-count').addClass('exceeded');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).next('.character-count').removeClass('exceeded');
                }
            });
            
            if (!isValid) {
                // Show all error messages
                var errorHtml = '<div class="alert alert-danger" id="char-limit-error">' +
                    '<strong><i class="fa fa-exclamation-triangle"></i> Character Limit Exceeded</strong>' +
                    '<p>The following descriptions exceed the 1400 character limit:</p>' +
                    '<ul>';
                
                errorMessages.forEach(function(msg) {
                    errorHtml += '<li>' + msg + '</li>';
                });
                
                errorHtml += '</ul><p>Please reduce the length of these descriptions before submitting.</p></div>';
                
                // Remove any existing error alert
                $('#award-form').find('#char-limit-error').remove();
                
                // Add new error alert at the top of the form (after any existing alerts)
                if ($('#success_alert').length) {
                    $('#success_alert').after(errorHtml);
                } else if ($('#danger_alert').length) {
                    $('#danger_alert').after(errorHtml);
                } else {
                    $('#award-form').prepend(errorHtml);
                }
                
                // Scroll to the first error field
                if (firstErrorField) {
                    $('html, body').animate({
                        scrollTop: firstErrorField.offset().top - 150
                    }, 500);
                    
                    // Focus on the first error field
                    firstErrorField.focus();
                }
                
                return false;
            }
            
            // If all validations pass, submit the form
            form.submit();
        }
    });
    
    // Also add real-time validation on keyup for better UX
    $(document).on('keyup', '.criteria-desc', function() {
        var text = $(this).val();
        var count = text.length;
        var countSpan = $(this).next('.character-count').find('.current-count');
        var countContainer = $(this).next('.character-count');
        
        // Update count display
        countSpan.text(count);
        
        // Remove all classes first
        countContainer.removeClass('warning exceeded');
        
        // Apply appropriate styling
        if (count > 1400) {
            countContainer.addClass('exceeded');
            countSpan.css('color', '#f44336');
            $(this).addClass('is-invalid');
        } else if (count > 1200) {
            countContainer.addClass('warning');
            countSpan.css('color', '#ff9800');
            $(this).removeClass('is-invalid');
        } else {
            countSpan.css('color', '#666');
            $(this).removeClass('is-invalid');
        }
    });
    
    // Also handle paste events
    $(document).on('paste', '.criteria-desc', function(e) {
        var self = $(this);
        setTimeout(function() {
            self.trigger('keyup');
        }, 100);
    });
});
</script>
    </div>
</div>