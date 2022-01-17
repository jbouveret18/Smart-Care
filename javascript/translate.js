function redirect(evt,targetLanguage) {
    baseUrl="";
    actualUrl = window.location.pathname.slice(14);
    targetUrl=baseUrl.concat('/Smart-Care',targetLanguage,actualUrl);
    document.write(targetUrl);
    location.replace(targetUrl);
}