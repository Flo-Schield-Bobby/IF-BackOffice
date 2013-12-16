// Add a new map item
$('#addMapItemButton').click(function() {
    $.ajax({
        type : "POST",
        url : "data/addMapItem.php",
        data : {
            label : $("#newLabel").val(),
            x : $("#newX").val(),
            y : $("#newY").val(),
            infoId : $("#newInfoId").val()
        }
    }).done(function(msg) {
        $('#addMapItemModal').modal('hide');
        getMapItems();
    }).fail(function(msg) {
        alert("Failure");
    });
});


// Open map item modal with an existing map item
$(document).on("click", ".modifyMapItemButton", function() {

    $('#editMapItemModal').modal('show');

    var formClass = $(this).parent().parent();

    var id = formClass.find('input[name="id"]').val();
    var label = formClass.find('input[name="label"]').val();
    var x = formClass.find('input[name="x"]').val();
    var y = formClass.find('input[name="y"]').val();
    var infoId = formClass.find('input[name="infoId"]').val();

    $('#editMapItemModal').find('input[id="id"]').val(id);
    $('#editMapItemModal').find('input[id="label"]').val(label);
    $('#editMapItemModal').find('input[id="x"]').val(x);
    $('#editMapItemModal').find('input[id="y"]').val(y);
    $('#editMapItemModal').find('input[id="infoId"]').val(infoId);
});

// Modify an existing map item
$('#editMapItemButton').click(function() {
    var id = $('#editMapItemModal').find('input[id="id"]').val();
    var label =  $('#editMapItemModal').find('input[id="label"]').val();
    var x = $('#editMapItemModal').find('input[id="x"]').val();
    var y = $('#editMapItemModal').find('input[id="y"]').val();
    var infoId = $('#editMapItemModal').find('input[id="infoId"]').val();

	$.ajax({
        type : "POST",
        url : "data/updateMapItem.php",
        data : {
            id : id,
            label : label,
            x : x,
            y : y,
            infoId : infoId
        }
    }).done(function(msg) {
        $('#editMapItemModal').modal('hide');
        getMapItems();
    }).fail(function(msg) {
        alert("Failure");
    });
});

$(document).on('click', '.mapItemDeleteButton', function (event) {
    if (confirm('Es-tu sûr de vouloir supprimer ça ? C\'est définitif hein...') ) {
        var id = $(this).parent().parent().find('input[name="id"]').val();

        $.ajax({
            type: "GET",
            url: "data/deleteMapItem.php?id="+id
        }).done(function (msg) {
            getMapItems();
            $("#onDeleteMapItemsAlert").show();
        }).fail(function (msg) {
            alert("Failure");
        });
    }
});

function getMapItems() {
    $.get("data/getMapItems.php", function(data) {
        $("#mapItem-table").html(data);
    });
}