/**
 * Returns an XMLHttp instance to use for asynchronous
 * downloading. This method will never throw an exception, but will
 * return NULL if the browser does not support XmlHttp for any reason.
 * @return {XMLHttpRequest|Null}
 */
function createXmlHttpRequest() {
    try {
        if (typeof ActiveXObject != 'undefined') {
            return new ActiveXObject('Microsoft.XMLHTTP');
        } else if (window["XMLHttpRequest"]) {
            return new XMLHttpRequest();
        }
    } catch (e) {
        changeStatus(e);
    }
    return null;
}
;










/**
 * This functions wraps XMLHttpRequest open/send function.
 * It lets you specify a URL and will call the callback if
 * it gets a status code of 200.
 * @param {String} url The URL to retrieve
 * @param {Function} callback The function to call once retrieved.
 */
function downloadUrl(url, callback, asText, async) {

if (async == null) {
	async = true; //asynchronous true by default
}

    var status = -1;
    var request = createXmlHttpRequest();
    if (!request) {
        return false;
    }

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            try {
                status = request.status;
            } catch (e) {
                //alert(e);	- suppress 	
                // Usually indicates request timed out in FF.
            }
            if (status == 200) {
                if (asText == true) {
                    callback(request.responseText, request.status);
                } else {
                    callback(request.responseXML, request.status);
                }
                request.onreadystatechange = function () {
                };
            }
        }
    }
    request.open('GET', url, async); //using asynchronous loading
    try {
        request.send(null);
    } catch (e) {
		//suppress errors
        //changeStatus(e);
    }
}
;

function downloadScript(url) {
    var script = document.createElement('script');
    script.src = url;
    document.body.appendChild(script);
}
