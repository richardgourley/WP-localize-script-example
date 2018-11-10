/*
HERE IS WHAT VAROUT WILL LOOK LIKE:
AN ARRAY OF OBJECTS FROM OUR PHP MULTI DIMENSIONAL ARRAY
0: Object { title: "Roofing", our_promise: "We work with the best roofing companies in the industry." }
1: Object { title: "Tiling", our_promise: "We work with the highest-rated tiling companies in the industry." }
2: Object { title: "Painting", our_promise: "The professionals we work with use the highest-quality paint in the industry." }
*/


//CONVERTING OUR ARRAY OF OBJECTS INTO A MULTI DIMENSIONAL ARRAY

var jArray = [];

//loop each object in array.. 0,1,2
for(obj in varout)
{
    //temporary array
    temp_arr = [];
    //loop each KEY in each OBJECT
    for(key in varout[obj])
    {
        //add the content of each key of each object to temp array.
        temp_arr.push(varout[obj][key]);
    }
    //Add the temp array to our main array to work with.
    jArray.push(temp_arr);
}

console.log(jArray);
//Display the multi-dimensional array how you wish...








