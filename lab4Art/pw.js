document.getElementById("przelicz").onclick = function() 
{
    let numb = parseFloat(document.getElementById("num").value)
    const waluta = document.getElementById("wal").value
    switch(waluta){
        case "Euro":
            numb *= 4.3
            break
        case "Dolar":
            numb *= 3.98
            break  
    }
    document.getElementById("out").innerHTML = numb
}