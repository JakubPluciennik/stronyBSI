<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../../login.php");
}

require "../../../wyloguj.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zadanie 2B</title>
    <style>
      body, table
      {
        margin:0px;
        text-align:center;
      }
      img
      {
        width:calc((90vw)/5);
      }
    </style>
  </head>
  <body>
    <table width="100%" border="1">
      <tr>
        <td>
          <img src="pictures/1.jpg" alt="Tekst alternatywny 1">
        </td>
        <td>
          <img src="pictures/2.jpg" alt="Tekst Alternatywny 2">
        </td>
        <td>
          <img src="pictures/3.jpg" alt="Tekst Alternatywny 3">
        </td>
        <td>
          <img src="pictures/4.jpg" alt="Tekst Alternatywny 4">
        </td>
        <td>
          <img src="pictures/5.jpg" alt="Tekst Alternatywny 5">
        </td>
      </tr>
      <tr>
        <td>
Lorem ipsum dolor sit amet ipsum sit amet, ligula. Sed adipiscing. Mauris eget elit aliquet elit. Sed hendrerit eget, blandit non, consectetuer at, mattis nec, mattis at, feugiat malesuada. Suspendisse eu eros. Suspendisse potenti. Suspendisse adipiscing. Mauris magna diam, venenatis in, accumsan id, placerat fringilla, massa. Duis a adipiscing quam eu mi. Fusce ligula. Sed diam eu ante. Vestibulum ante ipsum at ipsum. Vestibulum vestibulum, dolor sit amet, consectetuer adipiscing metus. Etiam varius, leo. Donec quis erat ac turpis et magnis dis parturient montes, nascetur ridiculus mus. Donec elementum nunc. Etiam ac turpis egestas. Mauris tortor. Nullam dui turpis quis.
        </td>
        <td>
Lorem ipsum dolor sit amet dolor. Vestibulum vitae turpis semper dui, accumsan at, pretium magna. Curabitur imperdiet, urna tellus dolor fermentum wisi, aliquam enim. Aliquam auctor tortor turpis, accumsan et, placerat aliquet. Aliquam nonummy, erat. Duis commodo est et lectus. Praesent magna arcu, in quam. Nulla nunc justo, at eros. Duis luctus. Phasellus sapien faucibus quis, dictum suscipit erat. Sed diam vitae porttitor lacus et mi. Aliquam urna. Donec euismod elit. In eros ut lobortis velit. Cum sociis natoque penatibus et interdum malesuada. Suspendisse potenti. Vivamus laoreet feugiat. Donec urna tellus non eros. Mauris mi ornare interdum, tortor eros, sagittis.
        </td>
        <td>
Lorem ipsum dolor sit amet dolor. Vestibulum vitae turpis semper dui, accumsan at, pretium magna. Curabitur imperdiet, urna tellus dolor fermentum wisi, aliquam enim. Aliquam auctor tortor turpis, accumsan et, placerat aliquet. Aliquam nonummy, erat. Duis commodo est et lectus. Praesent magna arcu, in quam. Nulla nunc justo, at eros. Duis luctus. Phasellus sapien faucibus quis, dictum suscipit erat. Sed diam vitae porttitor lacus et mi. Aliquam urna. Donec euismod elit. In eros ut lobortis velit. Cum sociis natoque penatibus et interdum malesuada. Suspendisse potenti. Vivamus laoreet feugiat. Donec urna tellus non eros. Mauris mi ornare interdum, tortor eros, sagittis.
        </td>
        <td>
Lorem ipsum dolor sit amet sapien leo sed dolor sit amet dolor. Nullam aliquet. Praesent volutpat lacinia varius justo. Aliquam fermentum libero et netus et nisl. Cras id erat volutpat. Vivamus imperdiet tincidunt, diam magna tincidunt augue sit amet, consectetuer lectus. Fusce porttitor, nulla mi, eu sodales tempor. Phasellus sagittis porttitor. Morbi vitae nibh vel wisi. Donec enim enim quis enim. Phasellus ut tellus consectetuer massa. Duis neque sollicitudin orci. Nam eu dui nunc, dapibus eu, fringilla mollis. Nulla facilisis luctus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elit arcu, eget accumsan sed, vestibulum quis, lacinia quam ac.
        </td>
        <td>
Lorem ipsum dolor sit amet sagittis venenatis. Curabitur lacinia aliquet pulvinar, pede id mauris sit amet, est. Integer in dolor. Aenean gravida turpis. Lorem ipsum primis in faucibus orci ut nibh. Cras ipsum dolor sit amet nibh. Morbi eleifend. Nulla facilisi. Nullam laoreet viverra nunc. Aliquam erat volutpat. Donec rutrum ac, pede. Sed faucibus, quam. Praesent commodo volutpat eu, ornare facilisis risus. Fusce venenatis consequat. Donec sit amet quam. Ut laoreet diam. Aenean ut nonummy malesuada, arcu a nisl. Nam id tincidunt mauris. Pellentesque ac ligula sed est. Nunc velit nulla ac nunc faucibus orci luctus a, urna. Aliquam ante.
        </td>
      </tr>
      <tr>
        <td>
          <img src="pictures/6.jpg" alt="Tekst Alternatywny 6">
        </td>
        <td>
          <img src="pictures/7.jpg" alt="Tekst Alternatywny 7">
        </td>
        <td>
          <img src="pictures/8.png" alt="Tekst Alternatywny 8">
        </td>
        <td>
          <img src="pictures/9.jpg" alt="Tekst Alternatywny 9">
        </td>
        <td>
          <img src="pictures/10.jpg" alt="Tekst Alternatywny 10">
        </td>
      </tr>
      <tr>
        <td>
Lorem ipsum dolor sit amet tempor tristique, convallis posuere. Vestibulum lacinia turpis egestas. Mauris eget nibh lacus, congue augue a enim vel nonummy consequat. Integer lorem dapibus imperdiet quis, faucibus velit in consequat ipsum dolor ut nunc venenatis eu, sagittis lacus. Quisque rutrum, urna magna arcu, eget magna. Suspendisse vestibulum tristique ut, ultricies a, dolor. Donec ligula ut nibh. Morbi sed libero in elit. Curabitur egestas. Aenean dictum orci. Mauris mi quam, a nunc. Sed vitae lorem nec tincidunt viverra. Pellentesque sem dolor sit amet justo. Pellentesque nibh ut ante id leo sodales eu, purus. Praesent tortor. Maecenas gravida, eros.
        </td>
        <td>
Lorem ipsum dolor sit amet magna. Nulla vestibulum ligula. Nunc vitae lacus. Nulla nec urna mauris, interdum pellentesque ut, libero. Morbi ligula tempor id, ante. Phasellus vitae facilisis sagittis vel, ipsum. Aliquam eget lacus et gravida mattis, magna dolor, dictum ut, gravida sagittis. Lorem ipsum dolor placerat pharetra varius. Etiam rutrum. Donec facilisis at, aliquet ac, felis. Curabitur imperdiet, neque tristique magna. Mauris id dolor quam, ultrices interdum. Etiam varius, scelerisque pede semper sollicitudin. Praesent gravida vel, wisi. Aenean ac tortor. Morbi ultrices posuere egestas sit amet sapien auctor vitae, cursus dui odio nec odio non diam. Phasellus id justo.
        </td>
        <td>
Lorem ipsum dolor sit amet enim. Cras non enim porttitor quis, vestibulum vel, ornare tortor vehicula libero dolor, luctus et ultrices posuere suscipit elementum consequat. Curabitur non enim ut erat. Duis gravida, erat volutpat. Ut eget quam at nibh. Ut eget sem sit amet metus nisl, sollicitudin augue sit amet magna. Vestibulum ante ipsum at consequat tortor. Proin sem vestibulum vehicula. Integer condimentum nunc. Etiam urna luctus a, adipiscing wisi a metus. Maecenas arcu nibh vel turpis. Sed posuere eu, pulvinar velit. Cum sociis natoque penatibus et nisl tristique pede. Nulla nec odio. Morbi pede. Duis tempor, pede eu nisl.
        </td>
        <td>
Lorem ipsum dolor sit amet metus. Proin posuere. Quisque in leo sit amet dolor. Pellentesque nonummy id, porttitor massa nec malesuada fames ac purus. Integer sollicitudin dignissim, sapien eleifend adipiscing elit. Aliquam auctor libero facilisis nisl nulla in turpis et netus et nisl. Vestibulum egestas ipsum vel nulla. Aenean commodo odio sagittis sed, ultrices metus convallis accumsan, libero ante, elementum euismod, quam ultrices metus mi risus, commodo convallis quam placerat ornare id, ullamcorper at, egestas at, mattis sed, suscipit urna mi, rutrum nulla, vitae est sem, eleifend pede id leo non luctus et fringilla mauris. Donec aliquam tortor. Maecenas quam.
        </td>
        <td>
Lorem ipsum dolor sit amet purus consectetuer ut, neque. Integer leo sed justo. Curabitur commodo. Suspendisse commodo est. Aliquam semper. Sed lobortis eu, egestas mi, nec malesuada fames ac imperdiet sed, ornare elementum eleifend, ligula. Lorem ipsum dolor ullamcorper pede ac turpis egestas. Mauris vestibulum in, consequat urna risus nunc, ornare pulvinar velit. Suspendisse egestas at, mattis magna. Etiam commodo, tortor eget urna. Sed adipiscing urna. Quisque cursus, mi leo elit odio, a dolor id lacus malesuada fames ac elit dapibus sit amet, est. Maecenas interdum consectetuer lacus. Curabitur lobortis eu, wisi. Donec tortor. Ut id nibh. Aliquam rhoncus dolor.
        </td>
      </tr>
      <tr>
        <td>
          <img src="pictures/11.jpg" alt="Tekst alternatywny 11">
        </td>
        <td>
          <img src="pictures/12.jpg" alt="Tekst alternatywny 12">
        </td>
        <td>
          <img src="pictures/13.jpg" alt="Tekst alternatywny 13">
        </td>
        <td>
          <img src="pictures/14.jpg" alt="Tekst alternatywny 14">
        </td>
        <td>
          <img src="pictures/15.jpg" alt="Tekst alternatywny 15">
        </td>
      </tr>
      <tr>
        <td>
Lorem ipsum dolor sit amet purus consectetuer ut, neque. Integer leo sed justo. Curabitur commodo. Suspendisse commodo est. Aliquam semper. Sed lobortis eu, egestas mi, nec malesuada fames ac imperdiet sed, ornare elementum eleifend, ligula. Lorem ipsum dolor ullamcorper pede ac turpis egestas. Mauris vestibulum in, consequat urna risus nunc, ornare pulvinar velit. Suspendisse egestas at, mattis magna. Etiam commodo, tortor eget urna. Sed adipiscing urna. Quisque cursus, mi leo elit odio, a dolor id lacus malesuada fames ac elit dapibus sit amet, est. Maecenas interdum consectetuer lacus. Curabitur lobortis eu, wisi. Donec tortor. Ut id nibh. Aliquam rhoncus dolor.
        </td>
        <td>
Lorem ipsum dolor sit amet elit. Aliquam vel lorem dapibus aliquam. Etiam sapien massa volutpat eu, luctus et ipsum. Nam quis porta sapien eu nulla. Cras ac turpis at mauris mattis adipiscing. Nulla diam vestibulum vel, purus. Aliquam ut nonummy auctor sapien. Etiam ullamcorper. Suspendisse at arcu nibh nulla facilisis enim. Pellentesque orci magna nec velit nulla quis sollicitudin eu, semper eu, magna. Vestibulum ante euismod pede, at neque. Etiam urna. Nunc massa at sapien et ultrices nec, imperdiet dignissim vitae, ipsum. Pellentesque laoreet purus laoreet vulputate at, elit. Curabitur volutpat aliquam id, nunc. Quisque et netus et metus eleifend.
        </td>
        <td>
Lorem ipsum dolor sit amet justo. Pellentesque felis. Cum sociis natoque penatibus et netus et odio. Nunc convallis non, rhoncus ut, laoreet ultricies a, dolor. In nunc justo at sapien. Aenean sit amet ligula. Aliquam erat metus sem, posuere arcu. Vestibulum ante in sapien. Aliquam erat sit amet libero quis libero. Nulla facilisi. Etiam aliquam eros in massa et felis sed enim. Pellentesque eget nunc venenatis eu, ullamcorper et, nonummy sagittis. Nullam sit amet nunc ut viverra semper auctor. Maecenas arcu iaculis quis, orci. Nunc a odio. Quisque consectetuer adipiscing dui nulla, vitae pede sit amet mauris. Nullam justo. Integer.
        </td>
        <td>
Lorem ipsum dolor sit amet leo sodales pede. Aliquam adipiscing elit sit amet, consectetuer eget, wisi. Vestibulum tempus. In hac habitasse platea dictumst. Maecenas semper nisl, semper risus. Nunc vulputate. Morbi accumsan id, elit. Nam tempor scelerisque, ligula felis, nec diam. Fusce ligula. Sed sollicitudin posuere, nibh volutpat eu, eleifend erat id nulla nisl neque ac quam molestie enim. In nunc interdum elementum. Fusce ut arcu. Suspendisse auctor, ante eget sem. Integer eu lorem. Vivamus laoreet feugiat. Donec adipiscing sollicitudin. Nullam suscipit mauris. Fusce venenatis interdum, diam eu ipsum. Nunc turpis. Etiam nibh eu diam. Fusce ligula. Vivamus fermentum ut.
        </td>
        <td>
Lorem ipsum dolor sit amet diam sed lorem nec libero. Cum sociis natoque penatibus et netus et ultrices posuere lobortis, varius vitae, imperdiet faucibus at, mattis metus at interdum dui turpis rutrum id, felis. Integer ultrices posuere laoreet, nulla in ipsum. Fusce facilisis eget, suscipit suscipit adipiscing. Vestibulum tincidunt. Sed eu tincidunt mauris. Nam eget volutpat ut, faucibus sit amet mauris. Ut lorem. Vivamus fermentum turpis mauris turpis, accumsan sit amet erat. Sed pulvinar enim dolor urna, faucibus orci mauris sit amet, tellus. Morbi nibh placerat vehicula non, ligula. Aliquam sem. Quisque a felis. Pellentesque habitant morbi tristique ullamcorper. Suspendisse.
        </td>
      </tr>
    </table>
  </body>
</html>
