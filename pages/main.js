document.addEventListener("DOMContentLoaded", function () {
  const accountTypeSelect = document.querySelector(
    'select[name="accountType"]'
  );
  const additionalFieldContainer = document.getElementById("additionalField");

  accountTypeSelect.addEventListener("change", function (e) {
    additionalFieldContainer.innerHTML = ""; 
    const selectedValue = e.target.value;

    let additionalFieldHTML = "";
    if (selectedValue == "1") {
      // Business Account
      additionalFieldHTML = `
                <div class="mb-3">
                    <input type="number" name="fee" class="form-control" placeholder="Enter Fee" required>
                    <div class="invalid-feedback">Fee is required</div>
                </div>
            `;
    } else if (selectedValue == "2") {
      // Current Account
      additionalFieldHTML = `
                <div class="mb-3">
                    <input type="number" name="limitt" class="form-control" placeholder="Enter Limit" required>
                    <div class="invalid-feedback">Limit is required</div>
                </div>
            `;
    } else if (selectedValue == "3") {
      // Saving Account
      additionalFieldHTML = `
                <div class="mb-3">
                    <input type="number" name="interet" class="form-control" placeholder="Enter Interest Rate" required>
                    <div class="invalid-feedback">Interest rate is required</div>
                </div>
            `;
    }

    additionalFieldContainer.innerHTML = additionalFieldHTML;
  });
});
