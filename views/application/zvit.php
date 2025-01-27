<?php
use app\services\AgentService;
?>
<div>
    <h1>Applications</h1>
    <!-- <form action="/application" method="GET"> -->
        <label for="date_of_decision_start">Дата вирішення з</label>
        <input type="date" onchange="location.href='/application?date_of_decision_start='+this.value+'&date_of_decision_end='+document.getElementById('date_of_decision_end').value" name="date_of_decision_start" id="date_of_decision_start" value="<?= $dates[0]!=null?$dates[0]:'' ?>">
        
        <label for="date_of_decision_end"><!--Дата вирішення--> по</label>
        <input type="date" onchange="location.href='/application?date_of_decision_end='+this.value+'&date_of_decision_start='+document.getElementById('date_of_decision_start').value" name="date_of_decision_end" id="date_of_decision_end" value="<?= $dates[1]!=null?$dates[1]:'' ?>">
        <!-- <button type="submit">Фільтрувати</button>
    </form> -->
    <table class="table">
        <thead>
            <tr>
                <th>ПІБ</th>
                <th>Відключення</th>
                <th>Перевірка/здешевлення</th>
                <th>Тех. питання</th>
                <th>Інше</th>
                <th>Всього</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($agents as $agent): ?>
            <tr>
                <td><?=$agent->full_name?></td>
                <td><?=AgentService::ApplicationNumberByCategory('Відключення',$agent->id,$dates)?></td>
                <td><?=AgentService::ApplicationNumberByCategory('Перевірка/здешевлення',$agent->id,$dates)?></td>
                <td><?=AgentService::ApplicationNumberByCategory('Технічне питання',$agent->id,$dates)?></td>
                <td><?=AgentService::ApplicationNumberByCategory('Інше',$agent->id,$dates)?></td>
                <td><?=AgentService::ApplicationsNumber($agent->id,$dates)?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
 