<div class="container row md-6 mx-auto mt-5 w-50 justify-content-center">

    <form class="text- flex-auto border border-light p-5" method="POST">
        
        <div class="row">

            <div class="col">

                <div class="row">

                    <div class="col md-6 mx-auto mt-5">

                        <p class="h4 mb-4">Player</p>

                        <input type="text" id="pc_hp" value="<?= set_value('pc_hp') ?>" name="pc_hp" class="form-control mb-4">

                        <input type="text" id="pc_mp" value="<?= set_value('pc_mp') ?>" name="pc_mp" class="form-control mb-4">

                    </div>

                </div>
            
            </div>

            <div class="col">

                <div class="row">

                    <div class="col md-6 mx-auto mt-5">

                        <p class="h4 mb-4">Enemy</p>

                        <input type="text" id="en_hp" value="<?= set_value('en_hp') ?>" name="en_hp" class="form-control mb-4">

                        <input type="text" id="en_mp" value="<?= set_value('en_mp') ?>" name="en_mp" class="form-control mb-4">

                    </div>

                </div>
            
            </div>

        </div>

        <div class="row">

            <button name="pc_act" value="1" class="btn btn-info my-4 btn-block" type="submit">Attack</button>

            <button name="pc_act" value="2" class="btn btn-info my-4 btn-block" type="submit">Defend</button>

            <button name="pc_act" value="3" class="btn btn-info my-4 btn-block" type="submit">Heal</button>

        </div>

        <div>
        <h3 class="text"><?= $v ?></h3>
        </div>
    
    </form>

</div>