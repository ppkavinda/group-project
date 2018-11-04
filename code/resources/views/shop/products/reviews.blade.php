<div id="reviews" class="tab2 resp-tab-content" aria-labelledby="tab_item-1">
    <div class="single_page_agile_its_w3ls">
        <div class="bootstrap-tab-text-grids">
            @forelse($product->reviews as $review)
            <div class="bootstrap-tab-text-grid row m-3">
                <div class="bootstrap-tab-text-grid-left col-sm-2">
                    <img src="{{ $review->user->profile_pic }}" alt="{{ 'Profile Picture of' . $review->user->name }}" class="img-fluid">
                </div>
                <div class="bootstrap-tab-text-grid-right col-sm-9">
                    <ul>
                        <li><a href="{{ route('user.profile', $review->user->id) }}">{{ $review->user->name }}</a></li>
                        {{-- <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li> --}}
                    </ul>
                    <div class="rating1">
                        <span class="starRating">
                            <input disabled id="rating5" type="radio" value="5"
                             @if($review->ratings == 5) checked @endif>

                            <label for="rating5">5</label>
                            <input disabled id="rating4" type="radio" value="4" 
                            @if($review->ratings == 4 ) checked @endif>

                            <label for="rating4">4</label>
                            <input disabled id="rating3" type="radio" value="3" 
                            @if($review->ratings == 3 ) checked @endif>

                            <label for="rating3">3</label>
                            <input disabled id="rating2" type="radio" value="2" 
                            @if($review->ratings == 2 ) checked @endif>

                            <label for="rating2">2</label>
                            <input disabled id="rating1" type="radio" value="1" 
                            @if($review->ratings == 1) checked @endif>

                            <label for="rating1">1</label>
                        </span>
                    </div>
                    <p>{{ $review->body }}</p>
                </div>
            </div>
            @empty
            No one has not reviewed this product yet. Be the first one to add a review.
            @endforelse
            <div class="add-review">
                <h4>write a review</h4>
                <form id="review-form" action="{{ route('reviews.store', $product->id) }}" method="post">
                    @csrf
                    <div class="rating1">
                        <span class="starRating">
                            <input id="r5" type="radio" name="ratings" value="5" @if(old('ratings')==5) checked @endif required>
                            <label for="r5">5</label>
                            <input id="r4" type="radio" name="ratings" value="4" @if(old('ratings')==4) checked @endif>
                            <label for="r4">4</label>
                            <input id="r3" type="radio" name="ratings" value="3" @if(old('ratings')==3) checked @endif>
                            <label for="r3">3</label>
                            <input id="r2" type="radio" name="ratings" value="2" @if(old('ratings')==2) checked @endif>
                            <label for="r2">2</label>
                            <input id="r1" type="radio" name="ratings" value="1" @if(old('ratings')==1) checked @endif>
                            <label for="r1">1</label>
                        </span>
                        @if($errors->has('ratings'))
                            <small class="text-danger">{{ $errors->first('ratings') }}</small>
                        @endif
                    </div>
                    <textarea name="body" placeholder="Enter your review here" min="4" required>{{ old('body') }}</textarea>
                    @if($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body') }}</small>
                        <br>
                    @endif
                    <input type="submit" value="ADD REVIEW">
                </form>
            </div>
        </div>
    </div>
</div>