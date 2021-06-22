(function () {
  "use strict";

  var treeviewMenu = $(".app-menu");

  // Toggle Sidebar
  $('[data-toggle="sidebar"]').click(function (event) {
    event.preventDefault();
    $(".app").toggleClass("sidenav-toggled");
  });

  // Activate sidebar treeview toggle
  $("[data-toggle='treeview']").click(function (event) {
    event.preventDefault();
    if (!$(this).parent().hasClass("is-expanded")) {
      treeviewMenu
        .find("[data-toggle='treeview']")
        .parent()
        .removeClass("is-expanded");
    }
    $(this).parent().toggleClass("is-expanded");
  });

  // Set initial active toggle
  $("[data-toggle='treeview.'].is-expanded")
    .parent()
    .toggleClass("is-expanded");

  //Activate bootstrip tooltips
  $("[data-toggle='tooltip']").tooltip();
})();

function Reload(table) {
  $(table).DataTable().ajax.reload();
}

function Reset(form) {
  $(form)[0].reset();
}

function Message(message, type) {
  var icon;
  var title;
  if (type == "success") {
    title = "Excelente: ";
    icon = "fa fa-check-circle";
  } else if (type == "error") {
    title = "Error: ";
    icon = "fa fa-times";
  } else {
    title = "Advertencia: ";
    icon = "fa fa-info-circle";
  }
  $.notify(
    {
      title: title,
      message: message,
      icon: icon,
    },
    {
      type: type,
      z_index: 2000,
    }
  );
}

function validar_numeros(event) {
  if (event.charCode >= 48 && event.charCode <= 57) {
    return true;
  }
  return false;
}

function pasar_valor(input1, input2) {
  document.getElementById(input1).value = document.getElementById(input2).value;
}

function campo_requerido(campo, mensaje) {
  campo.addEventListener("input", function (event) {
    if (campo.validity.typeMismatch) {
      campo.setCustomValidity(mensaje);
    } else {
      campo.setCustomValidity("");
    }
  });
}

function InvalidMsg(textbox, mensaje) {
  if (textbox.value == "") {
    textbox.setCustomValidity(mensaje);
  } else if (textbox.validity.typeMismatch) {
    textbox.setCustomValidity(mensaje);
  } else {
    textbox.setCustomValidity("");
  }
  return true;
}

function ValidarExistenciaDatos(url, data) {
  return $.ajax({
    url: base_url + url,
    method: "POST",
    data: data,
    global: false,
    async: false,
    dataType: "JSON",
    success: function (objData) {
      return objData;
    },
  }).responseJSON;
}

function icon_spinner(input, option) {
  if (option == "show") {
    $(input).removeClass("fa-search");
    $(input).addClass("fa-circle-o-notch");
    $(input).addClass("fa-spin");
    $(input).addClass("text-info");
  } else {
    $(input).removeClass("fa-circle-o-notch");
    $(input).removeClass("fa-spin");
    $(input).removeClass("text-info");
    $(input).addClass("fa-search");
  }
}

function button_spinner(button, option) {
  if (option == "show") {
    $(button).removeClass("fa fa-search");
    $(button).addClass("fa fa-circle-o-notch fa-spin");
  } else {
    $(button).removeClass("fa fa-circle-o-notch fa-spin");
    $(button).addClass("fa fa-search");
  }
}

function FetchApi(url, method, data) {
  var myHeaders = new Headers();

  myHeaders.append("Content-Type", "application/json");

  var raw = JSON.stringify(data);

  var requestOptions = {
    method: method,
    headers: myHeaders,
    body: raw,
    redirect: "follow",
  };

  fetch(url, requestOptions)
    .then((response) => response.json())
    .then((result) => {
      return JSON.parse(escapeJSON(result));
    })
    .catch((error) => console.log("error", error));
}

function escapeJSON(str) {
  return str.replace(/\\/g, "\\");
}

function removeDuplicates(originalArray, prop) {
  var newArray = [];
  var lookupObject = {};

  for (var i in originalArray) {
    lookupObject[originalArray[i][prop]] = originalArray[i];
  }

  for (i in lookupObject) {
    newArray.push(lookupObject[i]);
  }
  return newArray;
}

function formatNumber(n) {
  n = String(n).replace(/\D/g, "");
  return n === "" ? n : Number(n).toLocaleString();
}

function ConvertStringToUppercase(element) {
  var value = $(element).val();
  valueConvert = value.toUpperCase();
  $(element).val(valueConvert);
}

function CharactersLimit(element, maximum_allowed)
{
    if(element.value.length > maximum_allowed) {
        element.value = element.value.substr(0, maximum_allowed);
    }
}

