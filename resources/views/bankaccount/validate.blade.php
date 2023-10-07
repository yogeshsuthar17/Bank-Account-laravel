<script>

   $(document).ready(function() {
        $('#regForm').validate({
            rules: {
                    firstName: {
                        required: true,
                        maxlength: 20,
                    },
                    lastName:{
                        required: true,
                        maxlength: 20,
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 50
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    gender: {
                        required: true,
                    },
                    dateOfBirth: {
                        required: true,
                        date: true
                    },
                    address: {
                        required: true,
                        maxlength: 50
                    },
                    city: {
                        required: true,
                        maxlength: 40
                    },
                    state: {
                        required: true,
                        maxlength: 40
                    },
                    opening_balance: {
                        required: true,
                        minlength: 6,
                    },
                    bank_id: {
                        required: true,
                    },
            },
            messages: {
                firstName: {
                        required: "First name is required",
                        maxlength: "First name cannot be more than 20 characters"
                    },
                    lastName: {
                        required: "Last name is required",
                        maxlength: "Last name cannot be more than 20 characters"
                    },
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    phone: {
                        required: "Phone number is required",
                        minlength: "Phone number must be of 10 digits"
                    },
                    gender: {
                        required:  "Please select the gender",
                    },
                    dateOfBirth: {
                        required: "Date of birth is required",
                        date: "Date of birth should be a valid date"
                    },
                    address: {
                        required: "Address is required",
                        maxlength: "Address cannot not be more than 50 characters"
                    },
                    city: {
                        required: "City is required",
                        maxlength: "City cannot be more than 40 characters"
                    },
                    state: {
                        required: "State is required",
                        maxlength: "City cannot be more than 40 characters"
                    },
                    opening_balance: {
                        required: "Opening balance is required",
                        minlength: "Opening balance must be of 6 digits and more",

                    },
                    bank_id: {
                        required: "Choose bank",
                    },
            }

        })
    })
</script>