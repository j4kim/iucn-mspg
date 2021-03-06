<script id="image-template" type="text/x-handlebars-template">
    <div class="image-edit row" id="{{ type }}-{{ img.id  }}-edit">
        <div class="col-sm-4">
            <img src="{{ url }}" width="100%">
        </div>
        <div class="col-sm-8">
            <label class="control-label" for="title-{{ type }}-{{ img.id }}">Title</label>
            <div class="">
                <input class="form-control" type="text" id="title-{{ type }}-{{ img.id }}" name="{{ type }}_title_{{ img.id }}" value="{{ img.title }}">
            </div>
            <label class="control-label" for="legend-map-{{ img.id }}">Legend</label>
            <div class="">
                <input class="form-control" type="text" id="legend-map-{{ img.id }}" name="{{ type }}_legend_{{ img.id }}" value="{{ img.legend }}">
            </div>
            <button class="btn btn-danger remove" data-type="{{ type }}" data-id="{{ img.id }}">Remove</button>
        </div>
    </div>
</script>