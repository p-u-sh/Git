<script>
    const fileInput = document.getElementById('fileInput');
    const errorText = document.getElementById('errorText');

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            errorText.textContent = "";
        }
        if (file.type !== 'application/pdf') {
            errorText.textContent = 'Please upload a PDF file.';
            fileInput.value = '';
            return;
        }

        if (file.size > 2 * 1024 * 1024) {
            errorText.textContent = 'File size must be less than 2MB.';
            fileInput.value = '';
            return;
        }
    });

    const input2 = document.getElementById('input2');
    const error2 = document.getElementById('error2');

    input2.addEventListener('change', (event) => {

        const file2 = event.target.files[0];
        if (file2) {
            error2.textContent = "";
        }

        if (file2.type !== 'application/pdf') {
            error2.textContent = 'This should be a PDF file.';
            input2.value = '';
            return;
        }
        if (file2.size > 2 * 1024 * 1024) {
            error2.textContent = 'File size must be less than 2MB.';
            input2.value = '';
            return;
        }
    })


    const input3 = document.getElementById('input3');
    const error3 = document.getElementById('error3');

    input3.addEventListener('change', (event) => {

        const file3 = event.target.files[0];
        if (file3) {
            error3.textContent = "";
        }

        if (file3.type !== 'application/pdf') {
            error3.textContent = 'Please upload a PDF file.';
            input3.value = '';
            return;
        }
        if (file3.size > 2 * 1024 * 1024) {
            error3.textContent = 'File size must be less than 2MB.';
            input3.value = '';
            return;
        }
    })
    const input4 = document.getElementById('input4');
    const error4 = document.getElementById('error4');

    input4.addEventListener('change', (event) => {

        const file4 = event.target.files[0];
        if (file4) {
            error4.textContent = "";
        }
        if (file4.type !== 'application/pdf') {
            error4.textContent = 'Please upload a PDF file.';
            input4.value = '';
            return;
        }
        if (file4.size > 2 * 1024 * 1024) {
            error4.textContent = 'File size must be less than 2MB.';
            input4.value = '';
            return;
        }
    })
    const input5 = document.getElementById('input5');
    const error5 = document.getElementById('error5');

    input5.addEventListener('change', (event) => {

        const file5 = event.target.files[0];
        if (file5) {
            error5.textContent = "";
        }
        if (file5.type !== 'application/pdf') {
            error5.textContent = 'Please upload a PDF file.';
            input5.value = '';
            return;
        }
        if (file5.size > 2 * 1024 * 1024) {
            error5.textContent = 'File size must be less than 2MB.';
            input5.value = '';
            return;
        }
    })
    const input6 = document.getElementById('input6');
    const error6 = document.getElementById('error6');

    input6.addEventListener('change', (event) => {

        const file6 = event.target.files[0];
        if (file6) {
            error6.textContent = "";
        }
        if (file6.type !== 'application/pdf') {
            error6.textContent = 'Please upload a PDF file.';
            input6.value = '';
            return;
        }
        if (file6.size > 2 * 1024 * 1024) {
            error6.textContent = 'File size must be less than 2MB.';
            input6.value = '';
            return;
        }
    })
    const input7 = document.getElementById('input7');
    const error7 = document.getElementById('error7');

    input7.addEventListener('change', (event) => {

        const file7 = event.target.files[0];
        if (file7) {
            error7.textContent = "";
        }
        if (file7.type !== 'application/pdf') {
            error7.textContent = 'Please upload a PDF file.';
            input7.value = '';
            return;
        }
        if (file7.size > 2 * 1024 * 1024) {
            error7.textContent = 'File size must be less than 2MB.';
            input7.value = '';
            return;
        }
    })

    const input8 = document.getElementById('input8');
    const error8 = document.getElementById('error8');

    input8.addEventListener('change', (event) => {

        const file8 = event.target.files[0];
        if (file8) {
            error8.textContent = "";
        }
        if (file8.type !== 'application/pdf') {
            error8.textContent = 'Please upload a PDF file.';
            input8.value = '';
            return;
        }
        if (file8.size > 2 * 1024 * 1024) {
            error8.textContent = 'File size must be less than 2MB.';
            input8.value = '';
            return;
        }
    })



    function validateFile() {
        const fileInput = document.getElementById('fileInput');
        const errorText = document.getElementById('errorText');

        const file = fileInput.files[0];

        if (!file) {
            errorText.textContent = 'Please select a file.';
            errorText.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }


        const input2 = document.getElementById('input2');
        const error2 = document.getElementById('error2');

        const file2 = input2.files[0];

        if (!file2) {
            error2.textContent = 'Please select a file.';
            error2.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }

        const input3 = document.getElementById('input3');
        const error3 = document.getElementById('error3');

        const file3 = input3.files[0];

        if (!file3) {
            error3.textContent = 'Please select a file.';
            error3.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }


        const input4 = document.getElementById('input4');
        const error4 = document.getElementById('error4');

        const file4 = input4.files[0];

        if (!file4) {
            error4.textContent = 'Please select a file.';
            error4.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }


        const input5 = document.getElementById('input5');
        const error5 = document.getElementById('error5');

        const file5 = input5.files[0];

        if (!file5) {
            error5.textContent = 'Please select a file.';
            error5.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }

        const input6 = document.getElementById('input6');
        const error6 = document.getElementById('error6');

        const file6 = input6.files[0];

        if (!file6) {
            error6.textContent = 'Please select a file.';
            error6.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }


        const input7 = document.getElementById('input7');
        const error7 = document.getElementById('error7');

        const file7 = input7.files[0];

        if (!file7) {
            error7.textContent = 'Please select a file.';
            error7.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }


        const input8 = document.getElementById('input8');
        const error8 = document.getElementById('error8');

        const file8 = input8.files[0];

        if (!file8) {
            error8.textContent = 'Please select a file.';
            error8.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            return false;
        }

        document.getElementById('form').submit();
    }
</script>