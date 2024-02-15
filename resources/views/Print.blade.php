<x-master title="Printe">
    <center class="my-5 py-5">
        <a href="#" class="btnprn btn">Imprimer</a>
        <h1>Ticket</h1>
        <div>
            <table>
                <table>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Model</td>
                            <td>Nombre de place</td>
                            <td>Description</td>
                            <td>Plaque</td>
                            <td>Chauffeur</td>
                        </tr>
                    </thead>
                    <tbody>
    
    
                        <tr>
                            <td>#\{{ $chauffeur->id }}\
                            </td>
                            <td>
                                <div class='hw-[100%] rounded relative flex justify-center'><img width='10%'
                                        class='w-[80px]'><img class="rounded-circle"
                                        src="{{ asset('storage/' . $chauffeur->image) }}" alt="image">
                                </div>
                            </td>
    
                            <td>{{ $chauffeur->name }}
                            </td>
                            <td>{{ $chauffeur->model }}</td>
                            <td>{{ $chauffeur->type }}</td>
                            <td>{{ $chauffeur->body }}</td>
                            <td>{{ $chauffeur->plaque }}</td>
                            <td>{{ $chauffeur->profile_id }}</td>
                        </tr>
    
    
                    </tbody>
                </table>
            </table>
        </div>
    </center>

    <script>
        $(document).ready(function() {
            $('.btnprn').on("click", function() {
                // Call the printPage function
                loadPrintDocument();
            });

            /**
             * Load & show message box, call iframe
             */
            function loadPrintDocument() {
                $("body").append(components.messageBox("Please wait while we create your document"));
                $("#printMessageBox").css("opacity", 0);
                $("#printMessageBox").animate({
                    opacity: 1
                }, 300, function() {
                    addIframeToPage();
                });
            }

            /**
             * Inject iframe into document and attempt to hide
             */
            function addIframeToPage() {
                // Content of the iframe
                var iframeContent = $("center").html();

                // Create a new window and write the iframe content
                var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                mywindow.document.write('</head><body>');
                mywindow.document.write(iframeContent);
                mywindow.document.write('</body></html>');

                // Print the document
                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10

                mywindow.print();
                mywindow.close();

                unloadMessage();
            }

            /**
             * Hide & Delete the message box with a small delay
             */
            function unloadMessage() {
                $("#printMessageBox").delay(1000).animate({
                    opacity: 0
                }, 700, function() {
                    $(this).remove();
                });
            }

            /**
             * Build HTML components for the plugin
             */
            var components = {
                messageBox: function(message) {
                    return "<div id='printMessageBox' style='position:fixed;top:50%; left:50%;text-align:center;margin:-60px 0 0 -155px;width:310px;height:120px;font-size:16px;padding:10px;color:#222;font-family:helvetica,arial;opacity:0;background:#fff url(data:image/gif;base64,R0lGODlhZABkAOYAACsrK0xMTIiIiKurq56enrW1ta6urh4eHpycnJSUlNLS0ry8vIODg7m5ucLCwsbGxo+Pj7a2tqysrHNzc2lpaVlZWTg4OF1dXW5uboqKigICAmRkZLq6uhEREYaGhnV1dWFhYQsLC0FBQVNTU8nJyYyMjFRUVCEhIaCgoM7OztDQ0Hx8fHh4eISEhEhISICAgKioqDU1NT4+PpCQkLCwsJiYmL6+vsDAwJKSknBwcDs7O2ZmZnZ2dpaWlrKysnp6emxsbEVFRUpKSjAwMCYmJlBQUBgYGPX19d/f3/n5+ff39/Hx8dfX1+bm5vT09N3d3fLy8ujo6PDw8Pr6+u3t7f39/fj4+Pj46Ojo+Dg4Pz8/NjY2Nvb2+rq6tXV1eXl5cTExOzs7Nra2u7u7qWlpenp6c3NzaSkpJqamtbW1uLi4qKiovPz85ubm6enp8zMzNzc3NnZ2eTk5Kampufn597e3uHh4crKyv7+/gAAAP///yH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2NkU1RjAwRjJEMTExRTNGMkU1MTJDRjZBQTE3Qjk3RSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2NkU1RjAwRjJEMTExRTNGMkU1MTJDRjZBQTE3Qjk3RSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjY2RTVGMDBGMkQxMTFFM0YyRTUxMkNGNkFBMTdCOTdFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjY2RTVGMDBGMkQxMTFFM0YyRTUxMkNGNkFBMTdCOTdFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+U2FQkJ1zbAAAACZpVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAAACklEQVR42mJ89+4aDwAEcAJh5BhH7wAAAABJRU5ErkJggg==) no-repeat center center;border-radius:10px;'></div>");
                }
            };
        });
    </script>
    @include('includes.footer')
</x-master>
