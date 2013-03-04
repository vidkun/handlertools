function clearDefaultandCSS(el) {
	if (el.defaultValue==el.value) el.value = ""
	// If Dynamic Style is supported, clear the style
	if (el.style) el.style.cssText = ""
}

function IPCalcCSS(el) {
	if (el.style) el.style.cssText = "font-family:serif;font-size:1.25em;color:#000;"
}