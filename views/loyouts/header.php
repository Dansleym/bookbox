<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\BookCatalog/css/main.css" type="text/html"/>
    <title>Books</title>
</head>
<body>
<style>
body{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    background-color: #EDC860;
    padding-top: 10px;
}

.container{
    width: 67%;
    margin: 0 auto;
    box-shadow: 1px 1px 20px 2px gray;
}
.App {
  display: grid;
  grid-template-areas:
    "h h"
    "n c"
    "b b";
  grid-auto-columns: 9fr 3fr;
}

.header {
  grid-area: h;
  background-color: black;
  height: 200px;
}
.header > img {
  height: 60px;
}

.nav {
  grid-area: n;
  background-color: white;
  height: 100%;
}

.nav h2, h3{
  padding: 10px;
}

.rightside {
  grid-area: c;
  background-color: #EAEAEA;
}

.rightside ul{
  list-style: none;
  padding: 15px 10px;
  margin: 0;
}
.rightside ul li{
  padding: 5px 0;
}
.rightside ul li a{
  text-decoration: none;
  color: black;
}
.rightside ul li a:hover{
  text-decoration: underline;
}

/**books styles */
.book-container{
    margin-top: 50px;
    padding: 20px;
    min-height: 500px;
}
.book-container h2{
    border-bottom: 1px solid #C50023;
    color: #C50023;
}
.book:nth-child(2){
    border-top: none;
}
.book{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
    border-bottom: 1px solid #EAEAEA;
    border-top: 1px solid #EAEAEA;
}
.book-img{
    height: 210px;
    width: 25%;
}
.book-img img{
    height: 210px;
}
.book-info{
    width: 75%;
    height: 210px;
    padding-left: 20px;
}
.book-info p, h3{
    margin: 0;
    padding: 2px;
}
.book-price{
  color: #C50023;
  font-size: 1.5em;
  margin-top: 10px !important;
}
.book-description{
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
  word-wrap: break-word;
  margin-top: 20px !important;
}
.book-author{
    margin: 0;
}
.idbook-description{
  text-indent: 1em;
}

.book-name{
  color: #0F92C5;
}

.footer {
  grid-area: b;
  background-color: black;
  height: 200px;
}
</style>

<div class="container">
  <div class="App">
      <div class="header"><a href="/bookbox" style="color: white; font-size: 20px;">На главную</a></div>
