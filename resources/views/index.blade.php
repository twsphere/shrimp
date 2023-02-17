@extends('base')

@section('main')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"></path>
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"></path>
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"></path>
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path>
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
        <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
        <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"></path>
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
        <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path>
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"></path>
    </symbol>
    <symbol id="shrimp1" viewBox="0 0 64 64">
        <path d="M37.7 13c-7.3-7.1-17 1.5-29.9-11c8 12.9 22.4 6.5 28.5 12.3l1.4-1.3" fill="#ed4c5c"></path>
        <path d="M48.6 16.5L59 11.1c-15.9 3.7-22.7-.5-25.6 4.4c-7.4-1.2-9.8 3.5-9.8 3.5s-7.6.8-8 6.5c-2.8.3-6.3 2.9-4.9 5.7c-3.4 2-5.9 4.7-3.3 7.3c-3.7 4.3-2.3 6.2-1.4 6.6c-.9 6.6 1.5 7.2 2.3 7.4c.1 2.6.9 6.1 4 9.6c0 0 2.4-2.3.8-5.3c0 0 1.7 2.1 4.2 1.8c0 0 .2-2.3-1.3-5.1c0 0 1.9 1.7 4.2.4c0 0-2.4-3.7-6.6-5.1c.1-1.1-.2-2.5-1-4.2c.8-1.1 1.3-2.7 1.4-5.1c1.3-.9 2.5-2.6 3.3-5.5c1.1-.5 2.4-1.5 3.6-3.2c2.2.3 5.1-.5 8.5-3.5c2.2 0 5-1.1 8.3-4.2c3.5.4 9-.8 17-5.3c-.2.1-1.2.4-6.1-1.3" fill="#ff717f"></path>
        <path d="M43.9 15.7c-.8 2.2-3.2 3.4-5.4 2.6c-2.2-.8-3.4-3.2-2.6-5.4c.8-2.2 3.2-3.4 5.4-2.6c2.2.8 3.4 3.2 2.6 5.4" fill="#fff"></path>
        <path d="M41.8 15c-.4 1.1-1.5 1.6-2.6 1.3c-1.1-.4-1.6-1.5-1.3-2.6c.4-1.1 1.5-1.6 2.6-1.3c1.1.4 1.7 1.5 1.3 2.6" fill="#3e4347"></path>
        <g fill="#ed4c5c">
            <path d="M12.3 54.7c.5 2.6.1 7.3.1 7.3c1.9-1.3 1.6-4.2 1.6-4.2c1.4.9 3.4.8 3.4.8c-3.8-1.5-5.1-3.9-5.1-3.9"></path>
            <path d="M37.1 30c.2-.4.6-.4.1-.9c-1-.9-4.8.6-8.4-1.4c.2-.1.3-.3.5-.4c2.1.1 4.9-.9 8.3-4.3c3.5.4 9-.8 16.9-5.3c-1.1.5-17.6 7.4-21.9-1c-.6 1.8-.2 3.9 1.8 5.2c-6.4 0-17.3-10.7-29.4-5.5c12.5-2.6 19.3 5.5 27 7.4c-2.3 1.1-5.5 1.8-8.5-.5c0 0 1.1 2.3 3.4 3.4c-5.2 3.7-11.5-1.4-11.5-1.4c1 2.5 2.2 4 3.5 4.8c-3.7 4.3-8.4.9-8.4.9c1.7 2 3.2 3 4.6 3.2c-.8 2.2-3.1 6.2-7.9 4.2c0 0 2.3 1.6 4.8 1.5c-.1 1.6-.8 5.5-6.2 5.1c0 0 2.8 1.5 5.1.8c.7 1.6 1.3 4.8-2.8 6.6c0 0 5.1.3 5.6-3.2c1.8 1.2 2.9 2.7 2.9 2.7c-1 .2-3.4-.2-3.4-.2c2.7 2.6 4 6.8 4 6.8c.2-2.7-1.3-5.1-1.3-5.1c2.1 1.8 4.2.4 4.2.4c-2.2-3.2-4.8-4.5-6.4-5c0-1-.3-2.3-1.1-4c.9-1 1.5-2.7 1.4-5.6c1.1-.6 2.1-1.9 2.7-4c.9 1.7 2.8 4.3 6.1 5.7c.3.1.6.3 1-.2c3.2 2.9 2.4 6 3.1 6c.4.4 1 1.3 1.1 3.2c0 0 1.2-2 1-4.2c1 0-1.2-4.4-4.4-6.6c.4-.3.7-.2.5-.8c-.6-1.3-5-1.1-7.5-4.7c1.3-.6 2.3-1.8 3-2.8c.8 1.2 3.5 4.5 8 5.4c.3.1.7.1.9-.4c3.4 2.1 3.7 5.4 4.3 5.3c.4.3 1.2 1.1 1.8 2.9c0 0 .6-2.1.1-4.3c.9-.3-2.2-4-5.7-5.6c.3-.3.7-.3.3-.8c-.8-1.1-4.6-.3-7.8-2.6c1.8-.3 3.5-1.2 4.8-2.2c1.3 1.2 4.4 3.5 8.5 3.5c.3 0 .7 0 .8-.5c4.1 1.7 4.6 4.7 5.3 4.5c.5.2 1.4.8 2.3 2.5c0 0 .3-2.5-.7-4.2c1.1-.3-2.7-3.4-6.4-4.3"></path>
        </g>
    </symbol>
</svg>
<main>
    <h1 class="visually-hidden">蝦農人生訂購頁</h1>

    <div class="container px-4 py-5" id="featured-3">
        <img src="{{ Asset('images/BN_Website_2023.jpeg') }}" class="img-fluid" alt="Responsive image">
        <!--<h5 class="pb-2 border-bottom">&nbsp;</h5>-->
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
            <div class="feature col">
                <h3 class="fs-2 border-bottom"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 水晶蝦專區</h3>
                <p>水晶蝦飼養需要在22-25度之間才是最好的繁殖環境，若魚缸的溫度大於25度，建議先添購冷水機唷！</p>
                <a href="#menu1" class="icon-link d-inline-flex align-items-center">
                    點我瀏覽
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <div class="feature col">
                <h3 class="fs-2 border-bottom"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 米蝦專區</h3>
                <p>米蝦生存條件較廣也較容易爆缸獲得成就感，適合養蝦新手入門唷！</p>
                <a href="#menu2" class="icon-link d-inline-flex align-items-center">
                    點我瀏覽
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <div class="feature col">
                <h3 class="fs-2 border-bottom"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 蘇蝦專區</h3>
                <p>蘇蝦原生於熱帶區蘇拉維西，適合生存的溫度在26-30度之間，最適合為28，但因生性膽小，因此容易驚嚇</p>
                <a href="#menu3" class="icon-link d-inline-flex align-items-center">
                    點我瀏覽
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <div class="feature col">
                <h3 class="fs-2 border-bottom"><svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg> 養蝦專用添加物</h3>
                <p>良好穩定的環境、營養的食物皆為養蝦重要的一環，項目有成長型飼料、生態菌、微生物粉、礦物質添加劑...等</p>
                <a href="#menu4" class="icon-link d-inline-flex align-items-center">
                    點我瀏覽
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" id="menu1"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 水晶蝦</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/漂亮紅白3.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">厚殼紅白水晶蝦</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/一般紅白母蝦3.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">紅白水晶蝦</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/藍金母.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">藍金剛</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/黑金剛.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">黑金剛</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/全黑黑金剛.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">黑金剛</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">水晶蝦價格表</h2>
        <font color="#003399"><h5 class="fw-semibold mb-0">紅白水晶蝦飼養溫度22~25度，TDS介於120~130之間，請確定可以上午收貨<font color="red">並入缸</font>之時段再訂購</h5></font>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            @foreach ($products1 as $product)
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">{{ $product->name }}</h3>
                    <div style="background-image: url('uploads/{{$product->image}}');background-size: cover;">
                        <img src="img/border.png" alt="水晶蝦" width="100%" class="product-items"
                             data-id="{{ $product->id }}" data-price="{{ $product->price }}" data-name="{{ $product->name }}">
                    </div>
                    <div class="info-desc">
                        <div class="d-inline-block">
                            <p>售價：${{$product->price}}/隻<br>尺寸：{{$product->size}}</p>
                        </div>
                        <div class="d-inline-block" style="float:right">
                            <button type="button" class="btn btn-link btn-lg product-items-button" data-id="{{ $product->id }}" data-price="{{ $product->price }}" data-name="{{ $product->name }}">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                    <p>{{$product->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" id="menu2"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 米蝦</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/血腥瑪麗.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">血腥瑪麗</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/金背黃米蝦.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">金背黃金米蝦</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/夢幻藍絲絨.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">夢幻藍絲絨</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/綠米蝦1.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">綠米蝦</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">米蝦價格表</h2>
        <font color="#003399"><h5 class="fw-semibold mb-0">非池養米蝦，適應性較強，在一般魚缸的環境裡，運送及入缸後較不容易死亡，不容易有適應不良抱蛋晚的問題</h5></font>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            @foreach ($products2 as $product)
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                    <div>
                        <h3 class="fw-bold mb-0 fs-4">{{ $product->name }}</h3>
                        <div style="background-image: url('uploads/{{$product->image}}');background-size: cover;">
                            <img src="img/border.png" alt="水晶蝦" width="100%" class="product-items"
                                 data-id="{{ $product->id }}" data-price="{{ $product->price }}" data-name="{{ $product->name }}">
                        </div>
                        <div class="info-desc">
                            <div class="d-inline-block">
                                <p>售價：${{$product->price}}/隻<br>尺寸：{{$product->size}}</p>
                            </div>
                            <div class="d-inline-block" style="float:right">
                                <button type="button" class="btn btn-link btn-lg product-items-button" data-id="{{ $product->id }}" data-price="{{ $product->price }}" data-name="{{ $product->name }}">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                        <p>{{$product->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" id="menu3"><svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> 蘇蝦</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">


            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/藍幽靈_大圖.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">藍幽靈</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/金眼藍幽靈_大圖.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">金眼藍幽靈</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/Nasia.png" alt="Nasia" width="48" height="48" class="rounded-circle border border-warning">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">蘇蝦價格表</h2>
        <font color="#003399"><h5 class="fw-semibold mb-0">因蘇蝦在其他廠區，與其它蝦種<font color="red">無法合併運費</font>($200)</h5></font>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">藍幽靈</h3>
                    <div style="background-image: url('img/藍幽靈2.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$1300/隻<br>尺寸：0.8-1.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">金眼藍幽靈</h3>
                    <div style="background-image: url('img/金眼藍幽靈2_new.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$1800/隻<br>尺寸：0.81.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">紅白襪</h3>
                    <div style="background-image: url('img/紅白襪.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$55/隻(訂購數量10隻起)<br>尺寸：0.8-1.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">金眼紅白襪</h3>
                    <div style="background-image: url('img/金眼紅白襪_new.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$800/隻<br>尺寸：0.8-1.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">白蘭花</h3>
                    <div style="background-image: url('img/白蘭花.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$55/隻(訂購數量10隻起)<br>尺寸：0.8-1.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#shrimp1"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">白斑乳牛</h3>
                    <div style="background-image: url('img/白斑乳牛.jpeg');background-size: cover;"><img src="img/border.png" alt="蘇蝦" width="100%"></div>
                    <p>售價：$80/隻<br>尺寸：0.8-1.2cm</p><p>隨機出貨，恕無法指定公母</p>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom" id="menu4"><svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>  養蝦專用添加物</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="d-flex flex-column align-items-start gap-2">
                <h3 class="fw-bold"><svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg> 增長型專用飼料</h3>
                <img src="img/飼料2.jpeg" alt="增長型專用飼料" width="100%">
                <p>規格：30g<br>售價：$180</p>
                <p class="text-muted">獨家添加純膽固醇、飽和與不飽和脂肪酸、多元胺基酸等配方，促進成蝦、仔蝦健康成長及換殼，提升抵抗力及育成率。獨特配方促進觀賞蝦顯色、增豔，以及腸道健康增進食慾，嗜口性佳，不易崩解、不易破壞水質</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 g-4">

                <div class="d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-4 rounded-3">速</div>
                    <h4 class="fw-semibold mb-0">生長快速</h4>
                    <img src="img/追餌1.jpeg" alt="增長型專用飼料" width="100%">
                </div>

                <div class="d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-warning fs-4 rounded-3">佳</div>
                    <h4 class="fw-semibold mb-0">嗜口性佳</h4>
                    <img src="img/追餌2.jpeg" alt="增長型專用飼料" width="100%">
                </div>

                <div class="d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">獨</div>
                    <h4 class="fw-semibold mb-0">獨家配方</h4>
                    <img src="img/飼料3.jpeg" alt="增長型專用飼料" width="100%">
                </div>

                <div class="d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-danger fs-4 rounded-3">優</div>
                    <h4 class="fw-semibold mb-0">客戶回饋</h4>
                    <img src="img/評論.jpeg" alt="增長型專用飼料" width="100%">
                </div>

            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">蝦農人生</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="d-flex flex-column align-items-start gap-2">
                <h3 class="fw-bold">訂購須知</h3>
                <p class="text-muted">下單前請先詳閱，如能接受再請購買唷～謝謝！</p>
                <li>照片拍攝時會遠拍或拉近特寫，故請勿自行想像尺寸，出貨大小依文案標示為主，照片因不同顯示器顏色會有些許不同，如有任何疑問請與我們詳細溝通後再下訂</li>
                <li>活體出貨皆指定宅配隔日13點前收件，無提供超商取貨，如無法於該時間內收件、開箱確認、入缸需自負死傷風險</li>
                <li>收件後請立即開箱並全程錄影，有任何問題請於收件後一小時內回傳影片，若有活體死亡請勿拆袋並立即聯絡我們(收件時間以貨運司機第一次配送時間為準)</li>
                <li>若活體於運送過程中有死亡，將於下次訂購時補償或抵扣該活體金額</li>
                <li>蝦在運送過程中會有飛色的情形，入缸後顏色會慢慢恢復正常</li>
                <li>購蝦運費皆為$200(含包材)；訂單內不含活體可選超商取貨$60(全家/7-11)或宅配</li>
                <li>購蝦滿$300才出貨(不含運費)</li>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="d-flex flex-column gap-2">
                    <a href="https://www.youtube.com/channel/UCDKUxpKrYPyymag3pOO9Miw" target="_blank">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-danger fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0">YouTube</h4>
                    </a>

                    <p class="text-muted">分享多年養殖經驗，並用輕鬆易懂的方式聊聊水族知識，讓大家一次養魚／蝦就上手！歡迎訂閱、分享唷～</p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <a href="https://www.instagram.com/shrimshare" target="_blank">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-warning fs-4 rounded-3">
                            <svg class="bi">
                                <use xlink:href="#shrimp1"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0">IG</h4>
                    </a>
                    <p class="text-muted">分享蝦兒有趣的事及蝦農日常，歡迎魚友/蝦友追蹤、留言一起交流</p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <a href="https://www.facebook.com/profile.php?id=100063867794880" target="_blank">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#speedometer"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0">Facebook</h4>
                    </a>
                    <p class="text-muted">分享蝦兒有趣的事及蝦農日常，歡迎魚友/蝦友追蹤、留言一起交流</p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#table"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">我要訂購</h4>
                    <p class="text-muted">欲訂購蝦可<font color="blue">於此頁截圖</font>至ＩＧ／ＦＢ／ＬＩＮＥ＠私訊</p>
                    <a href="https://line.me/ti/p/~@730peinl" target="_blank" class="btn btn-success btn-lg">點我加LINE@730peinl</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

