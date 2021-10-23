const expression_field = document.getElementsByClassName("expression-field");

/**
 * Adds the given string to the expression field so that it can be evaluated later.
 * @param {*} expr The expression to be added.
 */
function addToExpr(expr) {
    let value = expression_field.namedItem("expression").value;
    switch (expr) {
        case "«":
            value = value.slice(0, -1);
            break;

        case "C":
            value = "";
            break;

        default:
            value += expr;
    }
    expression_field.namedItem("expression").value = value;
}

/**
 * Evaluates the expression in the expression field if it is valid.
 * 
 * Shows a confirmation dialog to clear current expression if it is not valid.
 */
function evaluateExpr() {
    const expr = expression_field.namedItem("expression").value;
    // Check if expression contains letters
    for (const e of expr) {
        if (e !== 'e' && e >= 'a' && e <= 'z') {
            getClearConfirmation("Invalid Expression!");
            return;
        }
    }

    // Find the result of the mathematical expression
    const result = eval(expr);
    expression_field.namedItem("expression").value = result;
}

/**
 * Gets confirmation for clearing the expression field from the user.
 * @param {*} prelude the extra prefix message to be added to the dialog (if any).
 * @returns {boolean} whether the user confirmed the Clear action.
 */
function getClearConfirmation(prelude) {
    var retVal = confirm(prelude + " Do you want to clear it?");
    if (retVal) addToExpr("C");
    return retVal;
}