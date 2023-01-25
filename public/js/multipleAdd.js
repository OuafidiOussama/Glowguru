

let addMoreBtn = document.getElementById('addMore');
let form = document.getElementById('form');

addMoreBtn.addEventListener('click', showForm);

function showForm(e) {
    // cancel the event of the button that send form information
    e.preventDefault();

    const newform = document.createElement('div');


    newform.innerHTML = `<div id="">
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="title[]" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Your Product Name')">
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price[]" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Your Product Price')">
    </div>
    <div class="mb-3">
        <label class="form-label">Product Description</label>
        <textarea name="disc[]"class="form-control" required oninvalid="this.setCustomValidity('Please Enter Your Product Description')"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Product Image</label>
        <input type="file" name="picture[]" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Your Product Image')">
    </div>
</div>`;

    
    form.insertBefore(newform,form.lastElementChild);
}

