*** Settings ***
Library  SeleniumLibrary

*** Variables ***
${URL}=            http://localhost:5500
${BROWSER}=             chrome

*** Test Cases ***
TC1
    Open Browser  ${URL}/index.html  ${BROWSER}
    Maximize Browser Window
    ${"Prenom_box"}     set variable  name:prename
    ${"Nom_box"}     set variable  name:name
    ${"Mail_box"}     set variable  name:email

    Input Text  ${"Prenom_box"}  Issam
    Input Text  ${"Nom_box"}  Merikhi
    Input Text  ${"Mail_box"}  issammerikhi@outlook.fr
    sleep 10


*** Keywords ***