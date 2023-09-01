import "./bootstrap";

import jQuery from "jquery";
window.$ = jQuery;

window.showSubCategories = function (obj, level) {
    // Get the category ID
    var categoryId = obj.value;
    // Increment the level by 1
    level += 1;

    // Remove the below elements
    if ($("#main_container").children().length + 1 - level > 0) {
        $(".cat_container_" + (level - 1))
            .nextAll()
            .remove();
    } else {
        $(".cat_container_" + level).remove();
    }

    // Create the select box with data populated from a database.
    $.ajax({
        url: "/children",
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            categoryId: categoryId,
        },
        success: function (data) {
            // Check if there is children
            if (data.children[0].children != 0) {
                // Create the new select box element
                var options = data.children[0].children;
                var html =
                    '<div class="mb-6 ' +
                    "cat_container_" +
                    level +
                    '"> <label for="cat_' +
                    categoryId +
                    '" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Subcategory</label> <select id="cat_' +
                    categoryId +
                    '" onchange="showSubCategories(this, ' +
                    level +
                    ')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">' +
                    '<option selected disabled value="0">Please select a sub category</option>';
                for (var i = 0; i < options.length; i++) {
                    html +=
                        '<option value="' +
                        options[i].id +
                        '">' +
                        options[i].title +
                        "</option>";
                }
                html += "</select></div>";

                // Add the new select box to the main container
                $("#main_container").append(html);
            }
        },
    });
};
