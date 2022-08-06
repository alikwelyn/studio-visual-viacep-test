<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>

function is_int(value) {
    if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
        return true;
    } else {
        return false;
    }
}
$(document).keyup(function() {
    var cep = $("#zip").val();
    if ((cep.length == 8) && (is_int(cep))) {
        $.ajax({
        type: "get",
        url: "https://viacep.com.br/ws/" + cep + "/json/",
        success: function(data) {
            try {
                jQuery("#address").val(data.logradouro);
                jQuery("#district").val(data.bairro);
                jQuery("#city").val(data.localidade);
                jQuery("#state").val(data.uf);
            } catch (e) {
                alert("errinho xD");
            }
        }
    });
    }
});
</script>