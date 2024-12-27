// document.addEventListener('DOMContentLoaded', function() {
//     const accountTypeSelect = document.querySelector('select[name="accountTypeF"]');
//     const form = document.getElementById('add-user-form');
//     let additionalField = null;

//     accountTypeSelect.addEventListener('change', function(e) {
//         // Remove existing additional field if any
//         if (additionalField) {
//             additionalField.remove();
//         }

//         // Create new field based on selection
//         const selectedValue = e.target.value;
//         additionalField = document.createElement('div');
//         additionalField.className = 'mb-3';

//         let fieldHTML = '';
//         switch(selectedValue) {
//             case '1': // Business account
//                 fieldHTML = `
//                     <input type="text"
//                            name="transaction fee"
//                            class="form-control form-control-lg"
//                            placeholder="transaction fee"
//                            required>
//                     <div class="invalid-feedback">transaction fee is required</div>
//                 `;
//                 break;
//             case '2': // Current account
//                 fieldHTML = `
//                     <input type="text"
//                            name="over draft limit"
//                            class="form-control form-control-lg"
//                            placeholder="over draft limit"
//                            required>
//                     <div class="invalid-feedback">over draft limit is required</div>
//                 `;
//                 break;
//             case '3': // Saving account
//                 fieldHTML = `
//                     <input type="number"
//                            name="interest rate"
//                            class="form-control form-control-lg"
//                            placeholder="interest rate"
//                            required>
//                     <div class="invalid-feedback">interest rate is required</div>
//                 `;
//                 break;
//         }

//         additionalField.innerHTML = fieldHTML;

//         // Insert the new field before the submit button
//         const submitButton = form.querySelector('input[type="submit"]').parentNode;
//         form.insertBefore(additionalField, submitButton);
//     });
// });
