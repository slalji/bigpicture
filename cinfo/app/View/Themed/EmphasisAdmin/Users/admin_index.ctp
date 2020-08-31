<!-- File: /app/View/Users/index.ctp -->

<h1>All Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Email</th> 
        <th>Role</th>  
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $post): ?>
    <tr>
        <td><?php echo $post['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['User']['username'],
                    array('action' => 'view', $post['User']['id'])
                );
            ?>
        </td>
        <td><?php echo $post['User']['role']; ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $post['User']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['User']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>