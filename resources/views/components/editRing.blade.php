<!-- Modal -->
<div class="modal fade" id="ring{{ $ring->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">RingID {{ $ring->id }}：{{ $ring->ring_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mb-3">
                <p>What are you doing?</p>
            <!-- リング名の編集へのリンク -->
                {!! link_to_route (
                    'rings.edit', 'edit ring', [
                    'id' => $ring->id ], [
                    'class' => 'btn btn-success btn-block mb-4',
                    'role' => 'button']
                ) !!}
            <!-- カード一覧へのリンク -->
                {!! link_to_route (
                    'cards.index', 'index cards', [
                    'id' => $ring->id ], [
                    'class' => 'btn btn-success btn-block',
                    'style' => 'text-decoration: none',
                    'role' => 'button']
                ) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 