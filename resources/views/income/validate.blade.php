<script>

   $(document).ready(function() {
        $('#regForm').validate({
            rules: {
                    user_id: {
                        required: true,
                    },
                    bank_id: {
                        required: true,
                    },
                    amount: {
                        required: true,
                        minlength: 3,
                    }
            },
            messages: {
               
                    bank_id: {
                        required: "Choose bank",
                    },
                    user_id: {
                        required: "Choose user",
                    },
                    amount: {
                        required: "Amount is required",
                        minlength: "Amount should be in 3 or more digits",
                    }
            }

        })
    })
</script>