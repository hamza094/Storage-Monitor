<div class="storage">
    
<h1>You Application Storage metrics</h1>
<hr>
        @foreach($entries as $entry)
<div class="storage-para">
             <p> <b>Disk name:</b>  <span>{{ $entry->storage_name }}</span> </p>
              <p> <b>File count:</b> <span>{{ $entry->file_count }} files peresent currently</span> </p>
               <p> <b>Recorded at:</b> <span>{{ $entry->created_at->diffForHumans() }}</span> </p>
</div>
        @endforeach
</div>

<style type="text/css">
    .storage{
        margin: 5rem;
    }
    h1{
        text-align: center;
    }
    .storage-para{
        text-align: center;
    }
    span{
        font-size:20px;
    }

</style>